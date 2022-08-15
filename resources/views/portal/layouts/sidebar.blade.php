<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('dashboard') }}">
                <img src="{{ asset('public/assets/images/brand/logo.png') }}"
                     class="header-brand-img desktop-logo"
                     alt="logo">
                <img src="{{ asset('public/assets/images/brand/logo-1.png') }}"
                     class="header-brand-img toggle-logo"
                     alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('dashboard') }}"><i
                                class="fa-solid fa-house-user fa-fw"></i><span
                                class="side-menu__label">&nbsp; Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Services</h3>
                </li>


                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('services') }}"> <i
                                class="fa-solid fa-cog fa-fw"></i></i><span
                                class="side-menu__label">&nbsp; My Services</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('services.order') }}"> <i
                                class="fa-solid fa-cart-shopping fa-fw"></i></i><span
                                class="side-menu__label">&nbsp; Order New Services</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('services.hosting.change') }}"> <i
                                class="fa-solid fa-arrow-up-right-dots fa-fw"></i><span
                                class="side-menu__label">&nbsp; Change Hosting Plan</span></a>
                </li>
                <li class="sub-category">
                    <h3>Domains</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#"> <i
                                class="fa-solid fa-globe fa-fw"></i></i><span
                                class="side-menu__label">&nbsp; Register Domains</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#"> <i
                                class="fa-solid fa-down-left-and-up-right-to-center fa-fw"></i></i><span
                                class="side-menu__label">&nbsp; Transfer Domain</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('domains') }}"> <i
                                class="fa-solid fa-screwdriver-wrench fa-fw"></i></i><span
                                class="side-menu__label">&nbsp; My Domains</span></a>
                </li>


                <!-- <li class="sub-category">
                    <h3>Security</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">   <i
                        class="fa-solid fa-lock fa-fw"></i></i><span
                            class="side-menu__label">&nbsp; Buy Dedicated SSL Certificate </span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">   <i
                        class="fa-solid fa-shield fa-fw"></i></i><span
                            class="side-menu__label">&nbsp; Install SSL </span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">   <i
                        class="fa-solid fa-file-shield fa-fw"></i></i><span
                            class="side-menu__label">&nbsp; Manage SSL Certificate </span></a>
                </li> -->

            <!--   <li class="sub-category">
                                <h3>Billing</h3>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">   <i
                                    class="fa-solid fa-file-invoice-dollar fa-fw"></i></i><span
                                        class="side-menu__label">&nbsp; Pay Invoices </span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{url('/ManageInvoices') }}">   <i
                                    class="fa-solid fa-receipt fa-fw"></i></i><span
                                        class="side-menu__label">&nbsp; Manage Invoices </span></a>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">   <i
                                    class="fa-solid fa-credit-card fa-fw"></i></i><span
                                        class="side-menu__label">&nbsp; Update Credit Card </span></a>
                            </li> -->

                <li class="sub-category">
                    <h3>Support</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('support.tickets.create') }}">
                        <i
                                class="fa-solid fa-message fa-fw"></i></i><span
                                class="side-menu__label">&nbsp; Create Support Ticket </span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('support.tickets.manage') }}"> <i
                                class="fa-solid fa-clipboard-check fa-fw"></i></i><span
                                class="side-menu__label">&nbsp; Manage Support Ticket </span></a>
                </li>


            </ul>

        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>