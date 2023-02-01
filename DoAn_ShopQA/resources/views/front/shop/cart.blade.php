@extends('front.layout.master')

@section('title', 'Giỏ Hàng')

@section('body')
    <!-- breaacrumb -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i>Trang Chủ</a>
                        <a href="./shop">Sản Phẩm</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breaacrumb end -->

    <!-- Giỏ Hàng Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                @if (Cart::count() > 0)
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th class="p-name">Tên Sản Phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                        <th>
                                            <i onclick="confirm('Bạn thật sự muốn xóa hết?') === true ? destroyCart() : ''"
                                                style="cursor: pointer" class="ti-close"></i>
                                        </th>
                                    </tr>
                                <tbody>

                                    @foreach ($carts as $cart)
                                        <tr data-rowid="{{ $cart->rowId }}">
                                            <td class="cart-pic first-row">
                                                <img style="height: 170px;"
                                                    src="front/img/products/{{ $cart->options->images[0]->path }}"
                                                    alt="">
                                            </td>
                                            <td class="cart-title first-row">
                                                <h5>{{ $cart->name }}</h5>
                                            </td>
                                            <td class="p-price first-row">${{ number_format($cart->price, 2) }}</td>
                                            <td class="qua-col first-row">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" value="{{ $cart->qty }}" data-rowId={{$cart->rowId}}>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-price first-row">
                                                ${{ number_format($cart->price * $cart->qty, 2) }}</td>
                                            <td class="close-td first-row">
                                                <i onclick="removeCart('{{ $cart->rowId }}')" class="ti-close"></i>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cart-buttons">
                                    <a href="./shop" class="primary-btn continue-shop">Tiếp tục mua</a>
                                </div>
                                <div class="discount-coupon">
                                    <h6>Mã giảm giá</h6>
                                    <form action="#" class="coupon-form">
                                        <input type="text" placeholder="Enter your codes">
                                        <button type="submit" class="site-btn coupon-btn">Áp dụng</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="proceed-checkout">
                                    <ul>
                                        <li class="subtotal">Tổng Tính <span>${{ $subtotal }}</span></li>
                                        <li class="cart-total">Tổng Thanh Toán<span>${{ $total }}</span></li>
                                    </ul>
                                    <a href="./checkout" class="proceed-btn">Tiến hành thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-12">
                        <h4>Giỏ hàng hiện tại rỗng.</h4>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Giỏ Hàng End -->
@endsection
