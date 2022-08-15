<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
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
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>

    <<!-- JQUERY JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        
    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('public/assets/js/show-password.min.js') }}"></script>
    <!-- GENERATE OTP JS -->
    <script src="{{ asset('public/assets/js/generate-otp.js') }}"></script>
    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('public/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <!-- Color Theme js -->
    <script src="{{ asset('public/assets/js/themeColors.js') }}"></script>
    <!-- CUSTOM JS -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
</body>
</html>