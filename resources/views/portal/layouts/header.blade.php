<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
               href="javascript:void(0)"><i class="fa-solid fa-bars fa-1x"></i></a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            {{--Cart--}}
                            <div class="dropdown  d-flex notifications" id="cartIconHeader">
                                <a class="nav-link icon" href="{{route('services.hosting.cart')}}">
                                    <i class="fa-solid fa-cart-shopping fa-4x"></i>
                                </a>
                            </div>

                            {{--Notifications--}}
                            <div class="dropdown  d-flex notifications">
                                <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                            class="fa-solid fa-bell fa-4x"></i><span class=" pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="notifications -menu">
                                        <a class="dropdown-item d-flex" href="{{route('domains') }}">

                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Dennis Trexy
                                                </h5>
                                                <span class="notification-subtext">lightupskills.com will expire in 7 days - renew now</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="{{route('domains') }}">

                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Dennis Trexy
                                                </h5>
                                                <span class="notification-subtext">lightupskills.com will expire in 7 days - renew now</span>
                                            </div>
                                        </a>

                                        <a class="dropdown-item d-flex" href="{{route('domains') }}">

                                            <div class="mt-1 wd-80p">
                                                <h5 class="notification-label mb-1">Dennis Trexy
                                                </h5>
                                                <span class="notification-subtext">lightupskills.com will expire in 7 days - renew now</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="{{route('notifications') }}"
                                       class="dropdown-item text-center p-3 text-muted">View all
                                        Notification</a>
                                    <a href="#"
                                       class="dropdown-item text-center p-3 text-muted">Mark As Read</a>
                                </div>
                            </div>
                            <!-- NOTIFICATIONS -->


                            <div class="dropdown  d-flex message">
                                <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                    <i class="fa-solid fa-message fa-4x"></i><span class="pulse"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Support
                                                Tickets</h6>

                                        </div>
                                    </div>
                                    <div class="message-menu">
                                        <a class="dropdown-item d-flex" href="{{route('support.ticket')}}">

                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Hosting Down</h5>
                                                    <small class="text-muted ms-auto text-end">
                                                        6:45 am
                                                    </small>
                                                </div>
                                                <span>My hosting is down since 24 hours....</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="{{route('support.ticket')}}">

                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Dns Issues</h5>
                                                    <small class="text-muted ms-auto text-end">
                                                        10:35 am
                                                    </small>
                                                </div>
                                                <span>Dns are not propagated yet.....</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="#">

                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">Emails not working</h5>
                                                    <small class="text-muted ms-auto text-end">
                                                        2:17 pm
                                                    </small>
                                                </div>
                                                <span>IO can not send emails...</span>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex" href="{{route('support.ticket')}}">

                                            <div class="wd-90p">
                                                <div class="d-flex">
                                                    <h5 class="mb-1">SSl Issue</h5>
                                                    <small class="text-muted ms-auto text-end">
                                                        7:55 pm
                                                    </small>
                                                </div>
                                                <span>my website showing not secured......</span>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a href="{{route('support.tickets.manage')}}"
                                       class="dropdown-item text-center p-3 text-muted">See all
                                        Support Tickets</a>
                                </div>
                            </div>
                            <!-- MESSAGE-BOX -->

                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                   class="nav-link leading-none d-flex">
                                    <img src="{{ asset('public/assets/images/users/aj.png') }}"
                                         alt="profile-user"
                                         class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">{{\App\Helpers\SiteHelper::GetLoggedInUser()[0]->first_name . ' ' . \App\Helpers\SiteHelper::GetLoggedInUser()[0]->last_name}}</h5>
                                            <small class="text-muted">
                                                <?php
                                                    if(\Illuminate\Support\Facades\Auth::user()->role_id == 1) {
                                                        echo 'Admin';
                                                    } else {
                                                        echo 'Customer';
                                                    }
                                                ?>
                                            </small>
                                        </div>
                                    </div>

                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="{{route('account') }}">
                                        <i class="fa-solid fa-user"></i>&nbsp;Account</a>

                                    <a class="dropdown-item" href="{{route('dashboard.logout')}}">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>