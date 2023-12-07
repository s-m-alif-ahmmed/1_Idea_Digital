<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Welcome to 1 idea digital company website.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/img/1idea_bulb.png">--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/img/1idea_bulb.png" />

    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/my_style.css">

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/')}}admin/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('/')}}admin/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/switcher/demo.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/')}}website/assets/plugins/icons/icons.css" rel="stylesheet" />

    <style>

        @font-face {
            font-family: Montserrat;
            src: url("http://localhost/office_files/work_files/1_idea_digital/public//website/fonts/Montserrat/Montserrat-Italic-VariableFont_wght.ttf");
        }

        @font-face {
            font-family: Poppins;
            src: url("http://localhost/office_files/work_files/1_idea_digital/public//website/fonts/Poppins/Poppins-Light.ttf");
        }

        @font-face {
            font-family: Roboto;
            src: url("http://localhost/office_files/work_files/1_idea_digital/public//website/fonts/Roboto/Roboto-Black.ttf");
        }

    </style>

</head>
<body class="ltr app sidebar-mini">

<!-- app-Header -->
@include('website.includes.header')
<!-- /app-Header -->

<!-- PAGE -->
<div class="page">

    {{--    @include('website.include.left-side-menu')--}}

    <div class="page-main">

        @yield('content')

    </div>

    {{--    @include('website.include.cart')--}}

</div>
<!-- page -->

<!-- FOOTER -->
@include('website.includes.footer')
<!-- FOOTER CLOSED -->




<script src="{{asset('/')}}website/js/all.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}website/js/fontawesome.js"></script>


<!-- JQUERY JS -->
<script src="{{asset('/')}}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('/')}}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- SWITCHER JS -->
<script src="{{asset('/')}}admin/assets/switcher/js/switcher.js"></script>



<!-- BOOTSTRAP JS -->
<script src="{{asset('/')}}website/assets/plugins/bootstrap/js/popper.min.js"></script>

<!-- PROFILE JS -->
<script src="{{asset('/')}}website/assets/js/profile.js"></script>


<!-- COLOR THEME JS -->
<script src="{{asset('/')}}website/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{asset('/')}}website/assets/js/custom.js"></script>


</body>
</html>
