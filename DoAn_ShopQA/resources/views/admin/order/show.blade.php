@extends('admin.layout.master')

@section('title', 'Đơn Đặt Hàng')

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
                        Đơn Đặt Hàng
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
                    <div class="card-body display_data">

                        <div class="table-responsive">
                            <h2 class="text-center">Danh Sách Sản Phẩm</h2>
                            <hr>
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Sản Phẩm</th>
                                        <th class="text-center">Số Lượng</th>
                                        <th class="text-center">Đơn Giá</th>
                                        <th class="text-center">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderDetail as $orderDetail)
                                    <tr>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img style="height: 60px;" data-toggle="tooltip" title="Image"
                                                                data-placement="bottom"
                                                                src="front/img/products/{{$orderDetail->product->productImages[0]->path}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">{{$orderDetail->product->name}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            {{$orderDetail->qty}}
                                        </td>
                                        <td class="text-center">${{$orderDetail->amount}}</td>
                                        <td class="text-center">
                                            ${{$orderDetail->total}}
                                        </td>
                                    </tr>                                    
                                    @endforeach

                                </tbody>
                            </table>
                        </div>



                        <h2 class="text-center mt-5">Thông tin Đơn Hàng</h2>
                        <hr>
                        <div class="position-relative row form-group">
                            <label for="name" class="col-md-3 text-md-right col-form-label">
                                Tên Khách Hàng
                            </label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->first_name}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->email}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="phone" class="col-md-3 text-md-right col-form-label">Phone</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->phone}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="company_name" class="col-md-3 text-md-right col-form-label">
                                Tên Công Ty
                            </label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->company_name}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="street_address" class="col-md-3 text-md-right col-form-label">
                                Địa Chỉ Đường Phố</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->street_address}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="town_city" class="col-md-3 text-md-right col-form-label">
                                Thành Phố</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->town_city}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="country" class="col-md-3 text-md-right col-form-label">Quốc Gia</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->country}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="postcode_zip" class="col-md-3 text-md-right col-form-label">
                                Mã Bưu/ZIP</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->postcode_zip}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="payment_type" class="col-md-3 text-md-right col-form-label">Thanh TOán</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->payment_type}}</p>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="status" class="col-md-3 text-md-right col-form-label">Trạng Thái</label>
                            <div class="col-md-9 col-xl-8">
                                <div class="badge badge-dark mt-2">
                                   {{\App\Utilities\Constant::$order_status[$order->status]}}
                                </div>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="description" class="col-md-3 text-md-right col-form-label">Mô Tả</label>
                            <div class="col-md-9 col-xl-8">
                                <p>{{$order->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
@endsection
