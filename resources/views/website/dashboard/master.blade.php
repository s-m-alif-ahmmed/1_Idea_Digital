<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

    <!-- TITLE -->
    <title>@yield('userTitle')</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}admin/assets/images/brand/1idea_bulb.png" />

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('/')}}admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/skin-modes.css" rel="stylesheet" />


    <!--- FONT-ICONS CSS -->
    <link href="{{asset('/')}}admin/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('/')}}admin/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/assets/switcher/demo.css" rel="stylesheet">

</head>

<body class="ltr app sidebar-mini">

<!-- Switcher-->
@include('admin.includes.switcher')
<!-- Switcher-->

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{asset('/')}}admin/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
    @include('website.dashboard.includes.header')
    <!-- /app-Header -->

        <!--APP-SIDEBAR-->
    @include('website.dashboard.includes.left-side-menu')
    <!--/APP-SIDEBAR-->

        <!--app-content open-->
        <div class="app-content main-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                @yield('userContent')
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>


    <!-- FOOTER -->
@include('website.dashboard.includes.footer')
<!-- FOOTER CLOSED -->

</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="{{asset('/')}}admin/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('/')}}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="{{asset('/')}}admin/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{asset('/')}}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/p-scroll/pscroll.js"></script>

<!-- STICKY JS -->
<script src="{{asset('/')}}admin/assets/js/sticky.js"></script>


<!-- APEXCHART JS -->
<script src="{{asset('/')}}admin/assets/js/apexcharts.js"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{asset('/')}}admin/assets/plugins/select2/select2.full.min.js"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{asset('/')}}admin/assets/plugins/circle-progress/circle-progress.min.js"></script>

<!-- INTERNAL DATA-TABLES JS-->
<script src="{{asset('/')}}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/datatable/dataTables.responsive.min.js"></script>

<!-- INDEX JS -->
<script src="{{asset('/')}}admin/assets/js/index1.js"></script>
<script src="{{asset('/')}}admin/assets/js/index.js"></script>

<!-- Reply JS-->
<script src="{{asset('/')}}admin/assets/js/reply.js"></script>


<!-- COLOR THEME JS -->
<script src="{{asset('/')}}admin/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{asset('/')}}admin/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{asset('/')}}admin/assets/switcher/js/switcher.js"></script>

</body>


</html>

