<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="front/css/tailwind.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">

</head>

<body>
    <!-- Start coding here -->

    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- header begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        saogiay123@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        +84 969688924
                    </div>
                </div>

                <div class="ht-right">
                    @if (Auth::check())
                        <a href="./account/logout" class="login-panel">
                            <i class="fa fa-user"></i>
                            {{Auth::user()->name}} - Logout
                        </a>
                    @else
                        <a href="./account/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    @endif

                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:380px ;">
                            <option value="vn" data-image="front/img/flag-3.jpg" data-imagecss="flag vn"
                                data-title="VietNamese">VN</option>
                            <option value="yt" data-image="front/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">
                                English</option>
                            <option value="yu" data-image="front/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Banglesh">German</option>

                        </select>
                    </div>
                    <div class="top-social">
                        <a href=""><i class="ti-facebook"></i></a>
                        <a href=""><i class="ti-twitter"></i></a>
                        <a href=""><i class="ti-linkedin"></i></a>
                        <a href=""><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            {{-- <a href="index.html">
                                <img src="front/img/logo.png" height="25" alt="">
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="shop">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">Tất cả sản phẩm</button>
                                <div class="input-group">
                                    <input name="search" value="{{ request('search') }}" type="text"
                                        placeholder="Nhập từ khóa tìm kiếm...">
                                    <button class="submit"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt"></i>
                                    <span class="cart-count">{{ Cart::count() }}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach (Cart::content() as $cart)
                                                    <tr data-rowId="{{ $cart->rowId }}">
                                                        <td class="si-pic">
                                                            <img style="height: 70px"
                                                                src="front/img/products/{{ $cart->options->images[0]->path }}">
                                                        </td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>${{ $cart->price }} x {{ $cart->qty }}</p>
                                                                <h6>${{ $cart->name }}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"
                                                                onclick="removeCart('{{ $cart->rowId }}')"></i>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>Tổng Thanh Toán:</span>
                                        <h5>${{ Cart::total() }}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">Xem giỏi hàng</a>
                                        <a href="./checkout" class="primary-btn check-out">Thanh toán</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">${{ Cart::total() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-meni"></i>
                        <span>Gian Hàng</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Quần Áo Nam</a></li>
                            <li><a href="#">Quần Áo Nữ</a></li>
                            <li><a href="#">Giày</a></li>
                            <li><a href="#">Dép</a></li>
                            <li><a href="#">Túi</a></li>
                            <li><a href="#">Balo</a></li>
                            <li><a href="#">Phụ Kiện</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="./">Trang
                                Chủ</a></li>
                        <li class="{{ request()->segment(1) == 'shop' ? 'active' : '' }}"><a href="./shop">Sản
                                Phẩm</a></li>
                        <li><a href="blog.html">Tin tức</a></li>
                        <li class="{{ request()->segment(1) == 'contact' ? 'active' : '' }}"><a href="./contact">Liên
                                Lạc</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./account/my-order">Danh sách đơn hàng</a></li>
                                <li><a href="blog-details.html">Chi Tiết</a></li>
                                <li><a href="./cart">Giỏ Hàng</a></li>
                                <li><a href="./checkout">Thủ Tục Thanh Toán</a></li>
                                <li><a href="faq.html">Các Câu Hỏi Thường Gặp</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>

    </header>
    <!-- header end -->

    {{-- Body here --}}
    @yield('body')

    <!-- logo đối tác -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo -->

    <!-- footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="front/img/_footer-logo.png" height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Triều Khúc - Thanh Xuân - Hà Nội</li>
                            <li>Phone: +84 96.96.88.924</li>
                            <li>Email: saogiay123@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">Về Chúng Tôi</a></li>
                            <li><a href="">Thủ Tục Thanh Toán</a></li>
                            <li><a href="">Liên Hệ</a></li>
                            <li><a href="">Hỗ Trợ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Tài Khoản</h5>
                        <ul>
                            <li><a href="">Tài Khoản</a></li>
                            <li><a href="">Thủ Tục Thanh Toán</a></li>
                            <li><a href="">Giỏ Hàng</a></li>
                            <li><a href="">Cửa Hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Nhận Thông Tin Ưu Đãi Ngay Bây Giờ</h5>
                        <p>Nhận thông tin cập nhập mới nhất và các ưu đãi của chúng tôi qua email.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Nhập Email của bạn" name="" id="">
                            <button type="button">Nhận Ngay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright: .....
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Js Plugins -->

    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/owlcarousel2-filter.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>
