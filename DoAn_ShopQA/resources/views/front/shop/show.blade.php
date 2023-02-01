@extends('front.layout.master')

@section('title', 'Sản Phẩm')

@section('body')

    <!-- breaacrumb -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i>Trang Chủ</a>
                        <a href="./shop">Sản Phẩm</a>
                        <span>Chi Tiết</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breaacrumb end -->
    <!-- product shop section begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('front.shop.components.products-sidebar-filter')
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img"
                                    src="front/img/products/{{ $product->productImages[0]->path ?? '' }}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    @foreach ($product->productImages as $productImage)
                                        <div class="pt active"
                                            data-imgbigurl="front/img/products/{{ $productImage->path }}">
                                            <img src="front/img/products/{{ $productImage->path }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{ $product->tag }}</span>
                                    <h3>{{ $product->name }}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart-alt"></i></a>
                                </div>
                                <div class="pb-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $product->avgRating)
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="fa fa-star-o"></i>
                                        @endif
                                    @endfor
                                    <span>({{ count($product->productComments) }})</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{ $product->content }}</p>
                                    @if ($product->discount != null)
                                        <h4>${{ $product->discount }} <span>${{ $product->price }}</span></h4>
                                    @else
                                        <h4>{{ $prodcut->price }}</h4>
                                    @endif
                                </div>
                                <div class="pd-color">
                                    <h6>Màu</h6>
                                    <div class="pd-color-choose">
                                        @foreach (array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                            <div class="cc-item">
                                                <input type="radio" id="cc-{{ $productColor }}">
                                                <label for="cc-{{ $productColor }}"
                                                    class="cc-{{ $productColor }}"></label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    @foreach (array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                        <div class="sc-item">
                                            <input type="radio" name="" id="sm-{{ $productSize }}">
                                            <label for="sm-{{ $productSize }}">{{ $productSize }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                        <a href="javascript:addCart({{$product->id}}" class="primary-btn pd-cart">Thêm Vào Giỏ</a>

                                    </div>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>Loại</span>: {{ $product->productCategory->name }}</li>
                                    <li><span>Thẻ</span>: {{ $product->tag }}</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Mã: {{ $product->sku }}</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">Mô Tả</a>
                                </li>
                                <li><a href="#tab-2" data-toggle="tab" role="tab">Thông Số</a></li>
                                <li><a href="#tab-3" data-toggle="tab" role="tab">Phản Hồi
                                        ({{ count($product->productComments) }})</a></li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="product-content">
                                        {!! $product->description !!}
                                        {{-- <div class="row">
                                            <div class="col-lg-7">
                                                <h5>Giới Thiệu</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna eliqua. Ut enim
                                                    ad minim veniam, quí nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                                <h5>Điểm Đặc Trưng</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna eliqua. Ut enim
                                                    ad minim veniam, quí nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="front/img/product-single/tab-desc.jpg" alt="">
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="specification-table">
                                        <table>
                                            <tr>
                                                <td class="p-catagory">Khách Hàng Đánh Giá</td>
                                                <td>
                                                    <div class="pd-rating">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $product->avgRating)
                                                                <i class="fa fa-star"></i>
                                                            @else
                                                                <i class="fa fa-star-o"></i>
                                                            @endif
                                                        @endfor
                                                        <span>({{ count($product->productComments) }})</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Giá</td>
                                                <td>
                                                    <div class="p-price">{{ $product->price }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Thêm Vào Giỏ Hàng</td>
                                                <td>
                                                    <div class="cart-add">+ add to cart</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Có Sẵn</td>
                                                <td>
                                                    <div class="p-stock">{{ $product->qty }} trong kho</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Trọng lượng</td>
                                                <td>
                                                    <div class="p-weight">{{ $product->weight }}kg</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Size</td>
                                                <td>
                                                    <div class="p-size">
                                                        @foreach (array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                                            {{ $productSize }},
                                                        @endforeach
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Màu</td>
                                                <td>
                                                    @foreach (array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                                        <label class="cs-{{ $productColor }}"></label>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="p-catagory">Mã</td>
                                                <td>
                                                    <div class="p-code">{{ $product->sku }}</div>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>{{ count($product->productComments) }} Phản hồi</h4>
                                        @foreach ($product->productComments as $productComment)
                                            <div class="comment-option">
                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="front/img/product-single/{{ $productComment->user->avatar ?? 'default.png' }}"
                                                            alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $productComment->rating)
                                                                    <i class="fa fa-star"></i>
                                                                @else
                                                                    <i class="fa fa-star-o"></i>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                        <h5>{{ $productComment->name }}<span>{{ date('M d, Y'), strtotime($productComment->creater_at) }}</span>
                                                        </h5>
                                                        <div class="at-reply">{{ $productComment->messages }}</div>
                                                    </div>
                                                </div>
                                        @endforeach
                                        <div class="leave-comment">
                                            <form action="" method="post" class="comment-form">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? null }}">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Nhập Tên Của Bạn..." name="name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Nhập Email Của Bạn...."
                                                            name="email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea name="messages" id="" cols="30" rows="10" placeholder="Nhập bình luận...."
                                                            name="messages"></textarea>
                                                        <div class="personal-rating">
                                                            <h6>Đánh Giá</h6>
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rating"
                                                                    value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rating"
                                                                    value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rating"
                                                                    value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rating"
                                                                    value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rating"
                                                                    value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="site-btn">Send message</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- product shop section end -->

    <!-- Related shop section begin -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản Phẩm Liên Quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedProducts as $product)
                    <div class="col-lg-3 col-sm-6">
                        @include('front.components.product-item')
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Related shop section end -->
@endsection
