@extends('front.layout.master')

@section('title', 'Result')

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
                <div class="row">
                    <div class="col-lg-12">
                        <h4>
                            {{$notification}}
                        </h4>

                        <a href="./" class="primary-btn mt-5">Tiếp tục mua hàng</a>
                    </div>
                </div>
        </div>
    </div>
    <!-- Checkout end -->
@endsection
