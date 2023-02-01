@extends('front.layout.master')

@section('title', 'Thanh Toán')

@section('body')

    <!-- breaacrumb -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Trang Chủ</a>
                        <a href="shop.html">Sản Phẩm</a>
                        <span>Thanh Toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breaacrumb end -->

    <!-- Checkout begin -->
    <div class="checkout-section spad">
        <div class="container">
            <form action="" method="POST" class="checkout-form">
                @csrf
                <div class="row">

                    @if (Cart::count() > 0)

                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="./account/login" class="content-btn">Đăng Nhập</a>
                            </div>
                            <h4>Chi Tiết Thanh Toán</h4>
                            <div class="row">
                                <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id ?? ''}}">
                                <div class="col-lg-6">
                                    <label for="fir">Họ<span>*</span></label>
                                    <input type="text" id="fir" name="first_name" value="{{Auth::user()->name ?? ''}}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last">Tên<span>*</span></label>
                                    <input type="text" id="last" name="last_name">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun-name">Tên Công Ty</label>
                                    <input type="text" id="cun-name" name="company_name" value="{{Auth::user()->company_name ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun">Quốc Gia<span>*</span></label>
                                    <input type="text" id="cun" name="country" value="{{Auth::user()->country ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="street">Địa Chỉ Nhận Hàng(vui lòng nhập chi tiết)<span>*</span></label>
                                    <input type="text" id="street" name="street_address" class="street-first" value="{{Auth::user()->street_address ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="zip">Mã bưu / Zip (Tùy chọn)<span></span></label>
                                    <input type="text" id="zip" name="postcode_zip" value="{{Auth::user()->postcode_zip ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Thị Trấn / Thành Phố<span>*</span></label>
                                    <input type="text" id="town" name="town_city" value="{{Auth::user()->town_city ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="email">Địa chỉ Email<span>*</span></label>
                                    <input type="text" id="email" name="email"  value="{{Auth::user()->email ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="phone">Số Điện Thoại<span>*</span></label>
                                    <input type="text" id="phone" name="phone" value="{{Auth::user()->phone ?? ''}}">
                                </div>
                                <div class="col-lg-12">
                                    <div class="create-item">
                                        <label for="acc-create">
                                            Tạo tài khoản?
                                            <input type="checkbox" id="acc-create">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <input type="text" placeholder="Nhập mã phiếu mua hàng của bạn....">
                            </div>
                            <div class="place-order">
                                <h4>Đơn Đặt Hàng</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Sản Phẩm <span>Tổng</span></li>
                                        @foreach ($carts as $cart)
                                            <li class="fw-normal">
                                                {{ $cart->name }} x {{ $cart->qty }}
                                                <span>${{ $cart->price * $cart->qty }}</span>
                                            </li>
                                        @endforeach

                                        <li class="fw-normal">Tổng Tính <span>${{ $subtotal }}</span></li>
                                        <li class="total-price">Tổng <span>${{ $total }}</span></li>
                                    </ul>

                                    <div class="payment-check">
                                        <div class="pc-item">
                                            <label for="pc-check">
                                                Thanh toán khi nhận hàng
                                                <input type="radio" name="payment_type" value="pay_later" id="pc-check"
                                                    checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Thanh toán online
                                                <input type="radio" name="payment_type" value="online_payment"
                                                    id="pc-paypal">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="order-btn">
                                        <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <h4>Giỏ Hàng Của Bạn Đang Rỗng</h4>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <!-- Checkout end -->
@endsection
