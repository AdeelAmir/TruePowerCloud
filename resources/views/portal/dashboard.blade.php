@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Dashboard</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <a href="https://trupowercloud.com:2083/" target="_blank">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h4 class="mb-0 number-font">Access <br>Cpanel</h4>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <i class="fa-brands fa-cpanel fa-3x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <a href="{{url('/PurchaseNewHosting') }}">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="mb-0 number-font">Purchase<br> New Hosting</h4>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <i class="fa-solid fa-cart-shopping fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <a href="#">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="mb-0 number-font">Register<br> Domains</h4>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <i class="fa-solid fa-globe fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <a href="{{url('/CreateSupportTicket') }}">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="mb-0 number-font">Support <br>Ticket</h4>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <i class="fa-solid fa-message fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                    <!-- ROW-1 END -->

                    <!-- ROW-2 -->
                <!-- <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <a href="#">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="mb-0 number-font">Pay<br>Invoice </h4>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <i class="fa-solid fa-file-invoice-dollar fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <a href="{{url('/ChangeHostingPlan') }}">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="mb-0 number-font">Change <br>Hosting Plan </h4>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <i class="fa-solid fa-arrow-up-right-dots fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <a href="#">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="mb-0 number-font">Update <br>Credit Card</h4>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <i class="fa-solid fa-credit-card fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <a href="#">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="mb-0 number-font">Contact Information</h4>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="chart-wrapper mt-1">
                                                        <i class="fa-solid fa-address-card fa-3x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                    <!-- ROW-2 END -->


                    <!-- ROW-3 -->
                    <!-- <div class="row">
                         <div class="col-xl-6 col-md-12">
                             <div class="card">
                                 <div class="card-header">
                                     <h4 class="card-title fw-semibold"><i class="fa-solid fa-message"></i> &nbsp Recent
                                         Support Tickets</h4>
                                 </div>
                                 <div class="table-responsive">
                                     <table class="table table-inbox table-hover text-nowrap mb-0">
                                         <tbody>
                                         <tr>

                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Tim Reid, S P N
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>Boost Your
                                                 Website Traffic
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>April 01
                                             </td>
                                         </tr>
                                         <tr class="">

                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Freelancer.com
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>Stop wasting
                                                 your visitors
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>May 23
                                             </td>
                                         </tr>
                                         <tr class="unread">
                                             <td class="view-message  dont-show clickable-row" data-href='email-read.html'>
                                                 PHPClass
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>Added a new
                                                 class: Login Class Fast Site
                                             </td>
                                             <td class="view-message  text-end clickable-row" data-href='email-read.html'>
                                                 9:27 AM
                                             </td>
                                         </tr>

                                         <tr class="">
                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Facebook
                                             </td>
                                             <td class="view-message view-message clickable-row" data-href='email-read.html'>
                                                 Somebody requested a new password
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>June 13
                                             </td>
                                         </tr>
                                         <tr class="">
                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Skype
                                             </td>
                                             <td class="view-message view-message clickable-row" data-href='email-read.html'>
                                                 Password successfully changed
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>March 24
                                             </td>
                                         </tr>
                                         <tr class="">
                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Google+
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>alireza, do
                                                 you know
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>March 09
                                             </td>
                                         </tr>
                                         <tr class="">
                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>WOW Slider
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>New WOW
                                                 Slider v7.8 - 67% off
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>March 14
                                             </td>
                                         </tr>
                                         <tr class="">

                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>LinkedIn Pulse
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>The One Sign
                                                 Your Co-Worker Will Stab
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>Feb 19
                                             </td>
                                         </tr>
                                         <tr class="unread">

                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Google Webmaster
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>Improve the
                                                 search presence of WebSite
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>March 15
                                             </td>
                                         </tr>
                                         <tr class="">
                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>JW Player
                                             </td>
                                             <td class="view-message clickable-row" data-href='email-read.html'>Last Chance:
                                                 Upgrade to Pro for
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>March 15
                                             </td>
                                         </tr>
                                         <tr class="">

                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Drupal Community
                                             </td>
                                             <td class="view-message view-message clickable-row" data-href='email-read.html'>
                                                 Welcome to the Drupal Community
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>March 04
                                             </td>
                                         </tr>
                                         <tr class="">

                                             <td class="view-message dont-show fw-semibold clickable-row"
                                                 data-href='email-read.html'>Drupal Community
                                             </td>
                                             <td class="view-message view-message clickable-row" data-href='email-read.html'>
                                                 Welcome to the Drupal Community
                                             </td>
                                             <td class="view-message text-end fw-semibold clickable-row"
                                                 data-href='email-read.html'>March 04
                                             </td>
                                         </tr>


                                         </tbody>
                                     </table>

                                 </div>
                             </div>
                         </div>-->

                    <!-- <div class="col-xl-6 col-lg-6 col-md-12">
                         <div class="card overflow-hidden">
                             <div class="card-header">
                                 <div>
                                     <h3 class="card-title"><i class="fa-solid fa-globe"></i>&nbsp Domains</h3>
                                 </div>
                             </div>
                             <div class="card-body p-0 mt-2">

                                 <div class="table-responsive mt-2 text-center">
                                     <table class="table text-nowrap border-dashed mb-0">
                                         <thead>
                                         <tr>
                                             <th class="text-start">Domain Name</th>
                                             <th class="">Validity</th>
                                             <th class="">Manage</th>


                                         </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td class="text-start p-4">Trupowerseo.com
                                             <td class="p-4">25-March-2022-25-March-2023</td>
                                             <td class="p-4"><a href="javascript:void(0)"
                                                                class="btn btn-default">Manage</a></td>

                                         </tr>
                                         <tr>
                                             <td class="text-start p-4">Alyjayrealestate.com</td>
                                             <td class="p-4">25-March-2022-25-March-2023</td>
                                             <td class="p-4"><a href="javascript:void(0)"
                                                                class="btn btn-default">Manage</a></td>


                                         </tr>
                                         <tr>
                                             <td class="text-start p-4">Alyjayrealestate.com</td>
                                             <td class="p-4">25-March-2022-25-March-2023</td>
                                             <td class="p-4"><a href="javascript:void(0)"
                                                                class="btn btn-default">Manage</a></td>


                                         </tr>
                                         <tr>
                                         <tr>
                                             <td class="text-start p-4">Alyjayrealestate.com</td>
                                             <td class="p-4">25-March-2022-25-March-2023</td>
                                             <td class="p-4"><a href="javascript:void(0)"
                                                                class="btn btn-default">Manage</a></td>


                                         </tr>
                                         <tr>
                                         <tr>
                                             <td class="text-start p-4">Alyjayrealestate.com</td>
                                             <td class="p-4">25-March-2022-25-March-2023</td>
                                             <td class="p-4"><a href="javascript:void(0)"
                                                                class="btn btn-default">Manage</a></td>


                                         </tr>
                                         <tr>
                                         <tr>
                                             <td class="text-start p-4">Alyjayrealestate.com</td>
                                             <td class="p-4">25-March-2022-25-March-2023</td>
                                             <td class="p-4"><a href="javascript:void(0)"
                                                                class="btn btn-default">Manage</a></td>


                                         </tr>
                                         <tr>
                                         <tr>
                                             <td class="text-start p-4">Alyjayrealestate.com</td>
                                             <td class="p-4">25-March-2022-25-March-2023</td>
                                             <td class="p-4"><a href="javascript:void(0)"
                                                                class="btn btn-default">Manage</a></td>


                                         </tr>


                                         </tbody>
                                     </table>

                                 </div>
                             </div>
                         </div>
                     </div>-->

                    <!-- <div class="card-header">
                         <h3 class="card-title">UPCOMING INVOICES</h3>
                     </div>
                     <p class="mp-para"></p>
                     <div class="col-xl-12 col-lg-12 col-md-12">
                         <div class="card">
                             <div class="table-responsive">
                                 <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                                     <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Amount</th>
                                         <th>Invoice Date</th>
                                         <th>Invoice Type</th>
                                         <th>Status</th>
                                         <th>Pay Now</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     <tr>
                                         <td>2198210</td>
                                         <td>USD 25.60</td>
                                         <td>Feb 28, 2022</td>
                                         <td>Monthly</td>
                                         <td>UnPaid</td>
                                         <td><a href="javascript:void(0)" class="btn btn-default">Pay Now</a></td>
                                     </tr>
                                     </tbody>
                                 </table>
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
 -->


                </div>
                <!-- CONTAINER END -->
            </div>
        </div>
        <!--app-content close-->

    </div>
@endsection