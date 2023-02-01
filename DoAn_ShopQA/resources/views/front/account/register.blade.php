@extends('front.layout.master')

@section('title', 'Đăng Kí')

@section('body')
    <!-- breaacrumb -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Trang Chủ</a>
                        <span>Đăng Kí</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breaacrumb end -->

    <!-- Register section begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Đăng Kí</h2>
                        @if (session('notification'))
                            <div class="alert alert-warning" role="alert">
                                {{session('notification')}}
                            </div>
                        @endif
                        <form action="" method="POST">
                            @csrf
                            <div class="group-input">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="group-input">
                                <label for="email">Email *</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật Khẩu *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Xác Nhận Mật Khẩu *</label>
                                <input type="password" id="con-pass" name="password_confirmation">
                            </div>
                            <button type="submit" class="site-btn register-btn">Đăng Kí</button>
                        </form>
                        <div class="switch-login">
                            <a href="./account/login" class="or-login">Đăng Nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register section end -->
@endsection
