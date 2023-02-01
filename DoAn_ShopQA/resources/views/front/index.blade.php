@extends('front.layout.master')

@section('title', 'Trang Chủ')

@section('body')
    <!-- 'hero section' -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>.....................</p>
                            <a href="#" class="primary-btn">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <Span>50%</Span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>.....................</p>
                            <a href="#" class="primary-btn">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <Span>50%</Span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>Black friday</h1>
                            <p>.....................</p>
                            <a href="#" class="primary-btn">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <Span>50%</Span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 'hero section' end -->

    <!-- Banner section -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kids's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner end -->

    <!-- Woman Banner Section Begins -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Women's</h2>
                        <a href="#">Discover more</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="women">Tất Cả</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Quần Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="women">Túi Xách</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Giày</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Phụ Kiện</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach ($featuredProducts['women'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Woman Banner Section End-->

    <!-- Thông tin khuyến mại -->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed <br />do ipsum dolor sit amet,
                        consectetur adipisicing elit</p>
                    <div class="product-price">
                        $35.00
                        <span>/ HanBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>48</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Mua Ngay</a>
            </div>
        </div>
    </section>
    <!-- Thông tin khuyến mại end -->


    <!-- Man Banner Section Begins -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="men">Tất Cả</li>
                            <li class="item" data-tag=".Clothing" data-category="men">Quần Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="men">Túi Xách</li>
                            <li class="item" data-tag=".Shoes" data-category="men">Giày</li>
                            <li class="item" data-tag=".Accessories" data-category="men">Phụ Kiện</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach ($featuredProducts['men'] as $product)
                            @include('front.components.product-item')
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                        <h2>Man's</h2>
                        <a href="#">Discover more</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Man Banner Section End-->

    <!-- Instagram section -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Sao Giấy</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Sao Giấy</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Sao Giấy</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Sao Giấy</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Sao Giấy</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Sao Giấy</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram section end -->

    <!-- Blog mới nhất Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img src="front/img/blog/{{$blog->image}}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar"></i>
                                        {{date('M d, Y',strtotime($blog->created_at))}}
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment"></i>
                                            0
                                    </div>
                                </div>
                                <a href="">
                                    <h4>{{$blog->title}}</h4>
                                </a>
                                <p>{{$blog->subtitle}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Miễn phí Ship</h6>
                                <p>Cho tất cả các đơn đủ 99$ trở lên</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao Hàng Đúng Hạn</h6>
                                <p>1 đổi 1 nếu có vấn đề</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Thanh Toán An Toàn</h6>
                                <p>An toàn 100%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog mới nhất  Section End -->
@endsection
