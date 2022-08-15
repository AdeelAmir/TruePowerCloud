@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Support Tickets</h1>

        </div>
        <div class="alert alert-secondary" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
            <strong>Well done!</strong> You successfully read <a href="javascript:void(0)" class="alert-link">this important alert message.</a>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- Row -->
        <div class="row ">
            @include('portal.layouts.side-bar-2')
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">MY INVOICES</h3>
                    </div>
                    <p class="mp-para">Manage your invoices.</p>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Amount</th>
                                    <th>Invoice Date</th>
                                    <th>Invoice Type</th>
                                    <th>Status</th>
                                    <th>Payment Method</th>
                                    <th> Pay Now</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-danger">unPaid</td>
                                    <td></td>
                                    <td class="p-4"><a href="javascript:void(0)"
                                                       class="btn btn-default">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-danger">unPaid</td>
                                    <td></td>
                                    <td class="p-4"><a href="javascript:void(0)"
                                                       class="btn btn-default">Pay</a></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>

                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                <tr>
                                    <td>2198210</td>
                                    <td>USD 25.60</td>
                                    <td>Feb 28, 2022</td>
                                    <td>Monthly</td>
                                    <td class="text-success">Paid</td>
                                    <td>Stripe</td>
                                    <td class="p-4"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 CLOSED -->

    </div>
@endsection