@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">
        <div class="page-header">
            <h1 class="page-title">Cart</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Cart</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
                <div class="card cart">
                    <div class="card-header">
                        <h3 class="card-title">Shopping Cart</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-vcenter">
                                <thead>
                                <tr class="border-top">
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="cartItemsTableBody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{--<div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <span class="input-group-text btn btn-primary">Apply Coupon</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 text-end"><a href="javascript:void(0)" class="btn btn-default disabled btn-md">Update Cart</a></div>
                        </div>
                    </div>--}}
                </div>
            </div>
            <div class="col-lg-12 col-xl-4 col-sm-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Cart Totals</div>
                    </div>
                    <div class="card-body py-2">
                        <div class="table-responsive">
                            <table class="table table-borderless text-nowrap mb-0">
                                <tbody>
                                <tr>
                                    <td class="text-start">Sub Total</td>
                                    <td class="text-end"><span class="fw-bold  ms-auto" id="cartSubTotalDisplay"></span></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Tax</td>
                                    <td class="text-end"><span class="fw-bold text-danger" id="cartTaxDisplay"></span></td>
                                </tr>
                                {{--<tr>
                                    <td class="text-start">Coupon Discount</td>
                                    <td class="text-end"><span class="fw-bold text-success">- $15%</span></td>
                                </tr>--}}
                                {{--<tr>
                                    <td class="text-start">Vat Tax</td>
                                    <td class="text-end"><span class="fw-bold">+ $9</span></td>
                                </tr>--}}
                                <tr>
                                    <td class="text-start fs-18">Total Bill</td>
                                    <td class="text-end"><span class="ms-2 fw-bold fs-23" id="cartTotalDisplay"></span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="btn-list">
                            <a class="btn btn-primary btn-sm" href="{{route('services.order') }}"><i class="fa fa-arrow-left me-1"></i>Continue Shopping</a>
                            <a class="btn btn-success btn-sm float-sm-end" href="{{route('services.hosting.checkout') }}"><i class="fa fa-arrow-right ms-1"></i> Check out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection