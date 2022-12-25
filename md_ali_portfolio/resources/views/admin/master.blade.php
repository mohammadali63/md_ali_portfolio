<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminAseet')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('adminAseet')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminAseet')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminAseet')}}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('adminAseet')}}/assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{asset('adminAseet')}}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{asset('adminAseet')}}/assets/css/header-colors.css" rel="stylesheet" />

    <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
@include('admin.include.header')
    <!--end top header-->
    @include('admin.include.leftside-bar')
    <!--start sidebar -->

    <!--start sidebar -->

    <!--start content-->
    <main class="page-content">

@yield('content')
    <!--End Back To Top Button-->

    <!--start switcher-->
@include('admin.include.right-sidebar')
    <!--end switcher-->


<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('adminAseet')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('adminAseet')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('adminAseet')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('adminAseet')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('adminAseet')}}/assets/js/pace.min.js"></script>
<script src="{{asset('adminAseet')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('adminAseet')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('adminAseet')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="{{asset('adminAseet')}}/assets/js/app.js"></script>
<script src="{{asset('adminAseet')}}/assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
</script>


</body>
</html>
