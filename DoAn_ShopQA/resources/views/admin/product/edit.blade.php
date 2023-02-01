@extends('admin.layout.master')

@section('title', 'Sản Phẩm')

@section('body')
    <!-- Main -->
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Sản Phẩm
                        <div class="page-title-subheading">
                            Xem, thêm, sửa, xóa và quản lí.
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <form method="post" action="./admin/product/{{$product->id}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="position-relative row form-group">
                                    <label for="brand_id" class="col-md-3 text-md-right col-form-label">Thương Hiệu</label>
                                    <div class="col-md-9 col-xl-8">
                                        <select required name="brand_id" id="brand_id" class="form-control">
                                            <option  value="">-- Thương Hiệu --</option>
                                            @foreach ($brands as $brand)
                                                <option {{$product->brand_id = $brand->id ? 'selected' : ''}} value={{ $brand->id }}>
                                                    {{ $brand->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="product_category_id"
                                        class="col-md-3 text-md-right col-form-label">Category</label>
                                    <div class="col-md-9 col-xl-8">
                                        <select required name="product_category_id" id="product_category_id"
                                            class="form-control">
                                            <option value="">-- Danh Mục --</option>
                                            @foreach ($productCategories as $productCategory)
                                                <option {{$product->productCategory_id = $productCategory->id ? 'selected' : ''}} value={{ $productCategory->id }}>
                                                    {{ $productCategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="name" class="col-md-3 text-md-right col-form-label">Tên</label>
                                    <div class="col-md-9 col-xl-8">
                                        <input required name="name" id="name" placeholder="Tên" type="text"
                                            class="form-control" value="{{ $product->name }}">
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="content" class="col-md-3 text-md-right col-form-label">Content</label>
                                    <div class="col-md-9 col-xl-8">
                                        <input required name="content" id="content" placeholder="Content" type="text"
                                            class="form-control" value="{{ $product->name }}">
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="price" class="col-md-3 text-md-right col-form-label">Giá</label>
                                    <div class="col-md-9 col-xl-8">
                                        <input required name="price" id="price" placeholder="Giá" type="text"
                                            class="form-control" value="{{ $product->price }}">
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="discount" class="col-md-3 text-md-right col-form-label">Giảm Giá</label>
                                    <div class="col-md-9 col-xl-8">
                                        <input required name="discount" id="discount" placeholder="Giảm Giá" type="text"
                                            class="form-control" value="{{ $product->discount }}">
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="weight" class="col-md-3 text-md-right col-form-label">Trọng Lượng</label>
                                    <div class="col-md-9 col-xl-8">
                                        <input required name="weight" id="weight" placeholder="Trọng Lượng"
                                            type="text" class="form-control" value="{{ $product->weight }}">
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="sku" class="col-md-3 text-md-right col-form-label">Mã</label>
                                    <div class="col-md-9 col-xl-8">
                                        <input required name="sku" id="sku" placeholder="Mã" type="text"
                                            class="form-control" value="{{ $product->sku }}">
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="tag" class="col-md-3 text-md-right col-form-label">Tag</label>
                                    <div class="col-md-9 col-xl-8">
                                        <input required name="tag" id="tag" placeholder="Tag" type="text"
                                            class="form-control" value="{{ $product->tag }}">
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="featured" class="col-md-3 text-md-right col-form-label">Đặc Sắc</label>
                                    <div class="col-md-9 col-xl-8">
                                        <div class="position-relative form-check pt-sm-2">
                                            <input name="featured" id="featured" type="checkbox" value="1"
                                                {{ $product->featured ? 'checked' : '' }} class="form-check-input">
                                            <label for="featured" class="form-check-label">Đặc sắc</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="description" class="col-md-3 text-md-right col-form-label">Mô Tả</label>
                                    <div class="col-md-9 col-xl-8">
                                        <textarea class="form-control" name="description" id="description" placeholder="Mô Tả">{!! $product->description !!}</textarea>
                                    </div>
                                </div>

                                <div class="position-relative text-center row form-group mb-1">
                                    <div class="col-md-9 col-xl-8 offset-md-2">
                                        <a href="./admin/product" class="border-0 btn btn-outline-danger mr-1">
                                            <span class="btn-icon-wrapper pr-1 opacity-8">
                                                <i class="fa fa-times fa-w-20"></i>
                                            </span>
                                            <span>Hủy</span>
                                        </a>

                                        <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                            <span class="btn-icon-wrapper pr-2 opacity-8">
                                                <i class="fa fa-download fa-w-20"></i>
                                            </span>
                                            <span>Lưu</span>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main -->

            {{-- CK edittor --}}
            <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('description')
            </script>
        @endsection
