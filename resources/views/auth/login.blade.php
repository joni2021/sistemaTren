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
    <link rel="stylesheet" type="text/css" href="assets/estilos.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

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
    @if(isset($errors))
        @include('mensajes/errors')
    @endif


<!-- Start: Content -->
    <section id="content_wrapper">
        <section id="content">

            <div class="admin-form theme-info col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 center-block" id="login1">
                <img src="assets/img/logos/logo_white.png" alt="Logo" class="img-responsive center-block pb10" width="200px">
                <div class="panel panel-info mt10 br-n">



                    <!-- end .form-header section -->
                    {!! Form::open(['route' => 'auth.authenticate', 'method' => 'POST']) !!}
                    {!! Form::token() !!}
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col-xs-12 pr30">

                                    <div class="section">
                                        {!!Form::label('user','Usuario',array('class' => 'field-label text-muted fs18 mb10'))!!}
                                        <label for="user" class="field prepend-icon">
                                            {!!Form::text('user','',array('class' => 'gui-input','placeholder' => 'Ingrese usuario'))!!}
                                            <label for="user" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label for="password" class="field prepend-icon">
                                            {!!Form::password('password',array('class' => 'gui-input','placeholder' => '**********'))!!}
                                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class="panel-footer clearfix p10 ph15">
                            {!! Form::submit('Ingresar',array('class' => 'button btn-primary mr10 pull-right')) !!}
                            <label class="switch block switch-primary pull-left input-align mt10">
                                {!! Form::checkbox('remember') !!}
                                <label for="remember" data-on="SI" data-off="NO"></label>
                                <span>Recordarme</span>
                            </label>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </section>
        <!-- End: Content -->


    </section>
    <!-- End: Content-Wrapper -->
</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- Google Map API -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!-- jQuery -->
<script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

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

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('js')

        <!-- END: PAGE SCRIPTS -->

</body>

</html>

