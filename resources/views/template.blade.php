<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Sistema del Tren Sanitario - MDS</title>
    <meta name="keywords" content="Sistema del Tren Sanitario - MDS" />
    <meta name="description" content="Sistema del Tren Sanitario - MDS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <base href="{!! asset('') !!}">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Estilos propios CSS -->

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/fonts/icomoon/icomoon.css">

    <link rel="stylesheet" type="text/css" href="estilos.css">

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

<!-- Start: Settings Scripts -->
<script>
    var boxtest = localStorage.getItem('boxed');

    if (boxtest === 'true') {
        document.body.className += ' boxed-layout';
    }
</script>
<!-- End: Settings Scripts -->

<!-- Start: Main -->
<div id="main" class="animated fadeIn">

    @include('sidebar/sidebar')

    <!-- Start: Content -->
    <section id="content_wrapper">
        @if(isset($errors))
            @include('mensajes/errors')
        @endif
        @if(session()->has('ok'))
            @include('mensajes/success')
        @endif

        <div class="row mt25">
            @yield('content')
        </div>

    </section>
    <!-- End: Content-Wrapper -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->


<!-- Page Plugins -->
<script type="text/javascript" src="assets/js/pages/login/EasePack.min.js"></script>
<script type="text/javascript" src="assets/js/pages/login/rAF.js"></script>
<script type="text/javascript" src="assets/js/pages/login/TweenLite.min.js"></script>
<script type="text/javascript" src="assets/js/pages/login/login.js"></script>

<!-- Theme Javascript -->
<script type="text/javascript" src="assets/js/utility/utility.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/demo.js"></script>

<!-- Page Javascript -->
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();


    });
</script>

@yield('js')

<!-- END: PAGE SCRIPTS -->

</body>

</html>
