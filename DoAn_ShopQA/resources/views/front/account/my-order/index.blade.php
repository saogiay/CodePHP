@extends('front.layout.master')

@section('title','Danh Sách Đặt Đơn Hàng')

@section('body')

    <!--Breadcrumb Section Begin-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="breadcrumb-text">
                    <a href="./home.html"><i class="fa fa-home"></i>Trang Chủ</a>
                    <span>Danh Sách Đơn Đặt Hàng</span>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb Section End-->

    <!--Shopping Cart section Begin-->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>ID</th>
                                <th class="p-name">Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Chi Tiết</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td class="cart-pic first-row  "><img style="height: 200px;" src="front/img/products/{{$order->orderDetail[0]->product->productImages[0]->path}}" alt=""></td>
                                    <td class="first-row ">#{{ $order->id }}</td>
                                    <td class="cart-title first-row">
                                        <h5>{{$order->orderDetail[0]->product->name}}
                                            @if(count($order->orderDetail) > 1)
                                                (và {{ count($order->orderDetail) }} sản phẩm khác)
                                            @endif
                                        </h5>
                                    </td>
                                    <td class="total-price first-row">${{ array_sum(array_column($order->orderDetail->toArray(),'total')) }}</td>
                                    <td class="first-row">
                                        <a class="btn" href="./account/my-order/{{ $order->id }}">Chi Tiết</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Shopping Cart section End-->

@endsection