@extends('front.layout.master')

@section('title', 'Đăng Nhập')

@section('body')
    <!-- breaacrumb -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Trang Chủ</a>
                        <span>Đăng Nhập</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breaacrumb end -->

    <!-- Login section begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Đăng Nhập</h2>
                        @if (session('notification'))
                            <div class="alert alert-warning" role="alert">
                                {{session('notification')}}
                            </div>
                        @endif
                        <form action="" method="POST"> 
                            @csrf
                            <div class="group-input">
                                <label for="email">Email *</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật Khẩu *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Nhớ mật khẩu
                                        <input type="checkbox" id="save-pass" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Quên mật khẩu</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">Đăng Nhập</button>
                        </form>
                        <div class="switch-login">
                            <a href="./account/register" class="or-login">Đăng kí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login section end -->
@endsection
