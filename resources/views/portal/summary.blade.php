@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Order Summary</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->


        <!-- ROW-1 OPEN -->
        <h1 class="page-title">Thank you for your Purchase!</h1>
        <span class="cmp-para">Your order 24238 placed on April 11, 2022 07:00 AM is completed. Use the order number if you contact our support.
Below you find your order summary and next steps to help you get started.</span>

        <div class="row">
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Purchase Summary</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap text-md-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Product</th>
                                    <th>Duration</th>
                                    <th>Price</th>
                                    <th>Manage</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Domain Registration</td>
                                    <td>trupowerseo.com</td>
                                    <td>1 Year</td>
                                    <td>$25.55 + ICANN FEE $0.18</td>
                                    <td><a href="javascript:void(0)" class="btn btn-default">Manage</a></td>
                                </tr>
                                <tr>
                                    <td>SSL</td>
                                    <td>Postive SSL</td>
                                    <td>1 Year</td>
                                    <td>$35</td>
                                    <td><a href="javascript:void(0)" class="btn btn-default">Manage</a></td>
                                </tr>
                                <tr>
                                    <td>Hosting</td>
                                    <td>Value Plan</td>
                                    <td>1 Month</td>
                                    <td>$25/monthly</td>
                                    <td><a href="javascript:void(0)" class="btn btn-default">Manage</a></td>
                                </tr>
                                <tr>
                                    <td>Domain Protection</td>
                                    <td>Free WHOiS Guard</td>
                                    <td>1 Year</td>
                                    <td>$0</td>
                                    <td><a href="javascript:void(0)" class="btn btn-default">Manage</a></td>
                                </tr>
                                <tr>
                                    <td>Security</td>
                                    <td>Succuri Mallware Scanner</td>
                                    <td>1 Year</td>
                                    <td>$500</td>
                                    <td><a href="javascript:void(0)" class="btn btn-default">Manage</a></td>
                                </tr>
                                </tbody>

                            </table>
                            <ul class="list-group border br-7 mt-5">
                                <li class="list-group-item border-0">
                                    Sub Total
                                    <span class="h6 fw-bold mb-0 float-end">$4,360</span>
                                </li>
                                <li class="list-group-item border-0">
                                    Discount
                                    <span class="h6 fw-bold mb-0 float-end">5%</span>
                                </li>

                                <li class="list-group-item border-0">
                                    Total
                                    <span class="h4 fw-bold mb-0 float-end">$50</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12">
                <div class="card cart">
                    <div class="card-header">
                        <h3 class="card-title">Customer</h3>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <h4 class="fw-semibold">Percy Kewshun</h4>
                            <p>4231 Bingamon Branch Road </p>
                            <p>Chicago, IL-60654</p>
                            <p class="mb-0">+125 254 3562 </p>
                        </div>
                    </div>
                </div>

                <div class="card cart">
                    <div class="card-header">
                        <h3 class="card-title">Payment Detail</h3>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <h4 class="fw-semibold">Payment Method</h4>
                            <p>Credit Card </p>
                            <p><i class="fa-solid fa-credit-card"></i> **** **** **** 9548</p>
                            <p>Order 24238</p>
                            <P>Intial Amount $50</P>
                            <p>Total Charged $50</p>

                            <p><a href="javascript:void(0)" class="btn btn-default">Download Receipt</a></p>
                        </div>
                    </div>


                </div>

            </div>


        </div>
        <!-- ROW-2 CLOSED -->

        <!-- CONTAINER END -->
    </div>
@endsection