@extends('front.layout.master')

@section('title', 'Liên lạc với chúng tôi')

@section('body')

    <!-- breaacrumb -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Trang Chủ</a>
                        <span>Liên Lạc</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breaacrumb end -->

    <!-- Map section begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.195675739683!2d105.79663795111088!3d20.984791985953585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc6bdc7f95f%3A0x58ffc66343a45247!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgR2lhbyB0aMO0bmcgVuG6rW4gdOG6o2k!5e0!3m2!1svi!2s!4v1668707248633!5m2!1svi!2s"
                 width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    <!-- Map section end -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <section class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Liên hệ với chúng tôi</h4>
                        <p>Nếu bạn có bất kì thắc mắc nào, đừng ngần ngại, hãy liên hệ ngay với chúng tôi.
                            Chúng tôi sẽ giải đáp mọi thắc mắc của bạn.
                        </p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Địa Chỉ:</span>
                                <p>54 - Triều Khúc - Thanh Xuân - Hà Nội</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Điện Thoại:</span>
                                <p>+84 96.96.88.924</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>anh01647048824@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Để Lại Bình Luận</h4>
                            <p>Chúng tôi sẽ liên lạc lại và giải đáp mọi thắc mắc của bạn.</p>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Nhập Tên Của Bạn...">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Nhập Email...">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="" id="" cols="30" rows="10" placeholder="Bình luận của bạn...."></textarea>
                                        <button type="submit" class="site-btn">Gửi Bình Luận</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Contact Section End -->

    @endsection
