@extends('template')
    @section('content')
            <section id="content">

                <div class="admin-form theme-info mw700" style="margin-top: 3%;" id="login1">

                    <div class="panel panel-info mt10 br-n">

                        <form method="post" action="http://admindesigns.com/" id="account2">
                            <div class="panel-body p25 bg-light">
                                <div class="section-divider mt10 mb40">
                                    <span>Complete los siguientes campos</span>
                                </div>
                                <!-- .section-divider -->

                                <div class="section row">
                                    <div class="col-md-6">
                                        <label for="nombre" class="field prepend-icon">
                                            <input type="text" name="nombre" id="nombre" class="gui-input" placeholder="nombre...">
                                            <label for="nombre" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="col-md-6">
                                        <label for="apellido" class="field prepend-icon">
                                            <input type="text" name="apellido" id="apellido" class="gui-input" placeholder="apellido...">
                                            <label for="apellido" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end .section row section -->

                                <div class="section">
                                    <label for="email" class="field prepend-icon">
                                        <input type="email" name="email" id="email" class="gui-input" placeholder="mail">
                                        <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                        <label for="usuario" class="field prepend-icon">
                                            <input type="text" name="usuario" id="usuario" class="gui-input" placeholder="usuario">
                                            <label for="usuario" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    <!-- end .smart-widget section -->
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label for="password" class="field prepend-icon">
                                        <input type="text" name="password" id="password" class="gui-input" placeholder="password">
                                        <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label for="confirmPassword" class="field prepend-icon">
                                        <input type="text" name="confirmPassword" id="confirmPassword" class="gui-input" placeholder="repita su password">
                                        <label for="confirmPassword" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix">
                                <button type="submit" class="button btn-primary pull-right">Crear usuario</button>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                </div>

            </section>
            <!-- End: Content -->
    @endsection
