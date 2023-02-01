@extends('front.layout.master')

@section('title','Chi Tiết Đơn Hàng')

@section('body')
    <!--Breadcrumb Section Begin-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-text">
                    <a href="./home.html"><i class="fa fa-home"></i>Trang Chủ</a>
                    <span>Chi Tiết Đơn Hàng</span>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->

    <!--Section Begin-->
    <section class="checkout-section spad">
        <div class="container">
            <form action="" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="" class="content-btn">
                                ID Đơn Hàng:
                                <b>{{ $order->id }}</b>
                            </a>
                        </div>
                        <h4>Chi tiết hóa đơn</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">Họ</label>
                                <input disabled type="text" id="fir" value="{{$order->first_name}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Tên</label>
                                <input disabled type="text" id="last" value="{{$order->last_name}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="cun-name">Tên Công Ty</label>
                                <input disabled type="text" id="cun-name" value="{{$order->company_name}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="cun">Quốc Gia</label>
                                <input disabled type="text" id="cun" value="{{$order->country}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="street">Địa chỉ nhận hàng(chi tiết)</label>
                                <input disabled type="text" id="street" class="street-first" value="{{$order->street_address}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="zip">Mã bưu / Zip</label>
                                <input disabled type="text" id="zip" value="{{$order->postcode_zip}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="town">Thị Trấn / Thành Phố</label>
                                <input disabled type="text" id="town" value="{{$order->town_city}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Địa chỉ Email</label>
                                <input disabled type="text" id="email" value="{{$order->email}}">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Số Điện Thoại</label>
                                <input disabled type="text" id="phone" value="{{$order->phone}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="" class="content-btn">
                                Trạng Thái:
                                <b>{{ \App\Utilities\Constant::$order_status[$order->status] }}</b>
                            </a>
                        </div>
                        <div class="place-order">
                            <h4>Đơn Đặt Hàng Của Bạn</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Sản Phẩm <span>Giá</span></li>

                                    @foreach($order->orderDetail as $orderDetail)
                                        <li class="fw-normal">
                                            {{$orderDetail->product->name}} x {{ $orderDetail->qty }}
                                            <span>${{ $orderDetail->total }}</span>
                                        </li>
                                    @endforeach

                                    <li class="total-price">
                                        Tổng
                                        <span>${{ array_sum(array_column($order->orderDetail->toArray(),'total')) }}</span>
                                    </li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Thanh Toán Khi Nhận Hàng
                                            <input disabled type="radio" name="payment_type" value="pay_later" id="pc-check" {{ $order->payment_type == 'pay_later' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Thanh Toán Online
                                            <input disabled type="radio" name="payment_type" value="online_payment" id="pc-paypal" {{ $order->payment_type == 'online_payment' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Section End-->
@endsection