<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TruPower Cloud">
    <meta name="author" content="TruPower Data">
    <meta name="keywords"
          content="Hosting, Management, Software, Trupower,Cloud.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/brand/fav.ico')}}"/>
    <!-- TITLE -->
    <title>Tru Power Cloud- Managed Cloud Cpanel Hosting</title>
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/dark-style.css') }}">
    <!--- FONT-ICONS CSS -->
    <script src="https://kit.fontawesome.com/c97ae5340d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('public/assets/colors/color1.css')}}"/>
</head>

<body class="app sidebar-mini ltr dark-mode">
<!-- PAGE -->
<div class="page">
    <div class="page-main">
    @include('portal.layouts.header')
    @include('portal.layouts.sidebar')
        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">
                {{--Content--}}
                @yield('content')
                {{--Content--}}
                @include('portal.layouts.footer')
            </div>
        </div>
        <!--app-content close-->
    </div>
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Sticky js -->
<script src="{{ asset('public/assets/js/sticky.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('public/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('public/assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('public/assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- SWEET-ALERT JS -->
<script src="{{ asset('public/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
<script src="{{ asset('public/assets//js/sweet-alert.js') }}"></script>

<!-- Handle Counter js -->
<script src="{{ asset('public/assets/js/handlecounter.js') }}"></script>

<!-- INTERNAL WYSIWYG Editor JS -->
<script src="{{ asset('public/assets/plugins/wysiwyag/jquery.richtext.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('public/assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('public/assets/js/themeColors.js') }}"></script>


<!-- CUSTOM JS -->
<script src="{{ asset('public/assets/js/custom.js') }}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6238cd0d1ffac05b1d7fb629/1fumu1vph';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@include('portal.layouts.scripts')
</body>
</html>