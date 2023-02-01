@extends('front.layout.master')

@section('title', 'Sản Phẩm')

@section('body')

    <!-- Điều hướng vị trí begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i>Trang Chủ</a>
                        <span>Sản Phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Điều hướng vị trí end -->

    <!-- Danh Sách SP begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    @include('front.shop.components.products-sidebar-filter')
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <form action="">
                                    <div class="select-option">
                                        <select name="sort_by" onchange="this.form.submit();" class="sorting">
                                            <option {{ request('sort_by') == 'latest' ? 'selected' : '' }} value="latest">
                                                Sắp xếp: Ngày thêm ▼</option>
                                            <option {{ request('sort_by') == 'oldest' ? 'selected' : '' }} value="oldest">
                                                Sắp xếp: Ngày thêm ▲</option>
                                            <option {{ request('sort_by') == 'name-accending' ? 'selected' : '' }}
                                                value="name-accending">Sắp xếp: Tên A → Z</option>
                                            <option {{ request('sort_by') == 'name-descending' ? 'selected' : '' }}
                                                value="name-descending">Sắp xếp: Tên A → Z</option>
                                            <option {{ request('sort_by') == 'price-descending' ? 'selected' : '' }}
                                                value="price-descending">Sắp xếp: Giá ▼</option>
                                            <option {{ request('sort_by') == 'price-ascending' ? 'selected' : '' }}
                                                value="price-ascending">Sắp xếp: Giá ▲</option>
                                        </select>
                                        <select name="show" onchange="this.form.submit();" class="p-show">
                                            <option {{ request('show') == '3' ? 'selected' : '' }} value="3">Show: 3
                                            </option>
                                            <option {{ request('show') == '9' ? 'selected' : '' }} value="9">Show: 9
                                            </option>
                                            <option {{ request('show') == '15' ? 'selected' : '' }} value="15">Show:
                                                15</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    @include('front.components.product-item')
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Danh Sách SP end -->
@endsection
