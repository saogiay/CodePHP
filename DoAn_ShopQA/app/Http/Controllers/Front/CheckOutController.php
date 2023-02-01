<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\Order\OrderServiceInterface;
use App\Service\OrderDetail\OrderDetailServiceInterface;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    public function __construct(OrderServiceInterface $orderService, OrderDetailServiceInterface $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request)
    {
        // thêm đơn hàng
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);

        // thêm chi tiết đơn hàng
        $carts = Cart::content();

        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->qty * $cart->price,
            ];

            $this->orderDetailService->create($data);
        }

        if ($request->payment_type == 'pay_later') {
            //Gửi email
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal);
            // xóa giỏ hàng
            Cart::destroy();
            // trả về kết quả thông báo
            return redirect('checkout/result')
                ->with('notification', 'Đặt Hàng Thành Công! Bạn sẽ thanh toán khi nhận được hàng. Hãy kiểm tra email của bạn.');
        }

        if ($request->payment_type == 'online_payment') {
            // lấy URL thanh toán VNPay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //Id đơn hàng
                'vnp_OrderInfo' => 'Mô tả đơn hàng ở đây....', //mô tả đơn hàng
                'vnp_Amount' => Cart::total(0, '', '') * 23855, //Tổng giá của đơn hàng. Nhân với tỉ giá USD vs VND
            ]);

            //chuyển hướng tới Url lấy được
            return redirect()->to($data_url);
        }
    }

    public function vnPayCheck(Request $request)
    {
        //Lấy data từ URL(do VNPay gửi về qua $vnp_Returnurl):
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //Mã phản hồi thanh toán
        $vnp_txnRef = $request->get('vnp_txnRef'); //oder_id
        $vnp_Amount = $request->get('vnp_Amount'); //Số tiền thanh toán

        //kiểm tra data, xem kết quả giao dịch trả về từ VNpay hợp lệ không:
        if ($vnp_ResponseCode != null) {
            //nếu thành công
            if ($vnp_ResponseCode == 00) {
                //cập nhập trạng thái
                $this->orderService->update(['status'=> Constant::order_status_Paid],$vnp_txnRef);
                //gửi email
                $order = $this->orderService->find($vnp_txnRef);
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order, $total, $subtotal);

                //xóa giỏ hàng
                Cart::destroy();

                //thông báo kết quả
                return redirect('checkout/result')
                    ->with('notification', 'Đặt Hàng Thành Công! Đã thanh toán trực tuyến. Hãy kiểm tra email của bạn.');
            }
            //nếu không thành công
            else {
                //Xóa đơn hàng đã thêm vào database
                $this->orderService->delete($vnp_txnRef);
                //Thông báo lỗi 
                return redirect('checkout/result')
                    ->with('notification', 'Lỗi:Lỗi Thanh Toán');
            }
        }
    }

    public function result()
    {
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }

    public function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact( 'order','total', 'subtotal'), function ($message) use ($email_to) {
            $message->from('anh01647048824@gmail.com', 'saogiay-doan');
            $message->to($email_to, $email_to);
            $message->subject('Order Notificaion');
        });
    }
}
