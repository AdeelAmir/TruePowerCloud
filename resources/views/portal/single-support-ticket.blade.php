@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Support Tickets</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Support Tickets</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Support Ticket Title</h3>
                </div>
                <div class="card-body">
                    <div style="background-color:#1A1A3C; padding:20px 20px 20px 20px;">
                        <div class="email-media">
                            <div class="mt-0 d-sm-flex">
                                <img class="me-2 rounded-circle avatar avatar-lg"  src="{{ asset('public/assets/images/users/logo.jpeg') }}" alt="avatar">
                                <div class="media-body pt-0">
                                    <div class="float-end d-none d-md-flex fs-15">
                                        <small class="me-3 mt-3 text-muted">Sep 13 , 2021 12:45 pm</small>
                                    </div>
                                    <div class="media-title text-dark font-weight-semibold mt-1">William Kane</div>
                                    <small class="mb-0">Genius Support Team</small>
                                    <small class="me-2 d-md-none">March 15 , 2022 10:30 AM</small>
                                </div>
                            </div>
                        </div>
                        <div class="eamil-body mt-5">
                            <p>Hello,

                                Thank you for contacting TruPowerCloud Support Team.

                                We have reviewed the reported issue and it seems that you have added multiple SetEnv Directives in your website's .htaccess file, which were the cause of the issue.

                                When you have opened this ticket, the Apache Service on your server was unable to interpret those directives, as the required Apache Module was missing.

                                We have just installed the mod_env Apache Module and now the reported issue has been resolved.

                                Please, do not hesitate to update us again if we can be of any further assistance.</p>

                            <p>Kind Regards,<br>

                                William Kane<br>
                                Genius Support Team<br>
                                TruPowercloud.com</p>
                            <hr>

                        </div>

                    </div>
                    <hr>
                    <div style="background-color:#000014; padding:20px 20px 20px 20px;">
                        <div class="mt-0 d-sm-flex">
                            <img class="me-2 rounded-circle avatar avatar-lg"  src="{{ asset('public/assets/images/users/aj.png') }}" alt="avatar">
                            <div class="media-body pt-0">
                                <div class="float-end d-none d-md-flex fs-15">
                                    <small class="me-3 mt-3 text-muted">Sep 13 , 2021 12:45 pm</small>
                                </div>
                                <div class="media-title text-dark font-weight-semibold mt-1">Aly Jay</div>
                                <small class="mb-0">Customer</small>
                                <small class="me-2 d-md-none">March 15 , 2022 10:30 AM</small>
                            </div>
                        </div>

                        <div class="eamil-body mt-5">
                            <h6>Hi</h6><br>
                            <p>Application: http://www.abc.example.com/
                                Internal Server Error
                                The server encountered an internal error or misconfiguration and was unable to complete your request.

                                Please contact the server administrator at webmaster@jahanara.wampdo.com to inform them of the time this error occurred, and the actions you performed just before this error.

                                More information about this error may be available in the server error log.

                                Additionally, a 500 Internal Server Error error was encountered while trying to use an ErrorDocument to handle the request.
                                Latest changes: Internal Server Error
                                The server encountered an internal error or misconfiguration and was unable to complete your request.
                                http://www.abc.example.com/
                                Please contact the server administrator at webmaster@jahanara.wampdo.com to inform them of the time this error occurred, and the actions you performed just before this error.

                                More information about this error may be available in the server error log.

                                Additionally, a 500 Internal Server Error error was encountered while trying to use an ErrorDocument to handle the request.
                                When the issue appeared for the first time: http://www.abc.example.com

                                Additional information: http://www.abc.example.com/</p>
                            <p>IP Address: 101.50.70.218 USER___AGENT:os=windows&&browser=Google Chrome&&accept_language=en</p>
                            <br><br>
                            <p class="mb-0">Thank you</p>
                            <hr>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection