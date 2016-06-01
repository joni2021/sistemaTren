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

    @yield('css')

    <!-- jQuery -->
    {{--<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>--}}
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    {{--<script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>--}}
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <!-- Google Map API -->
    {{--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&signed_in=true&libraries=places&callback=initMap"></script>--}}
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=true&amp;language=es&amp;components=country:AR"></script>
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

<!-- Google Map API -->
{{--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>--}}


<!-- Bootstrap -->
<script type="text/javascript" src="vendor/plugins/map/gmaps.min.js"></script>
<script type="text/javascript" src="vendor/plugins/gmap/jquery.ui.map.min.js"></script>
<script type="text/javascript" src="vendor/plugins/gmap/ui/jquery.ui.map.services.js"></script>
<script type="text/javascript" src="vendor/plugins/gmap/ui/jquery.ui.map.extensions.js"></script>
<script type="text/javascript" src="vendor/plugins/gmap/ui/jquery.ui.map.microformat.js"></script>
<!-- Page Plugins via CDN -->
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>
<!-- Theme Javascript -->
<script type="text/javascript" src="assets/js/utility/utility.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/demo.js"></script>

 <!-- Bootstrap -->
    {{--<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>--}}


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



    <script>

        $(document).ready(function(){

            // daterange plugin options
            var rangeOptions = {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            }


            // Init daterange plugin
            $('#daterangepicker1').daterangepicker();

        });


    </script>

@yield('js')


<!-- END: PAGE SCRIPTS -->

</body>

</html>
