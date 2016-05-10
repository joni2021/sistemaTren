@extends('template')

@section('content')


                <div class="col-md-9 center-block">
                    <div id="dock-panel">
                        <div class="dock-item" data-title="A Panel">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="admin-form theme-info" id="login1">                                                                                                <form method="post" action="http://admindesigns.com/" id="account2">
                                                        <div class="panel-body p25 bg-light">
                                                            <div class="section-divider mt10 mb40">
                                                                <span>Ingreso Nuevo Usuario</span>
                                                            </div>
                                                            <!-- .section-divider -->

                                                            <div class="section row">
                                                                <div class="col-md-6">
                                                                    <label for="firstname" class="field prepend-icon">
                                                                        <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Nombre">
                                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                                        </label>
                                                                    </label>
                                                                </div>
                                                                <!-- end section -->

                                                                <div class="col-md-6">
                                                                    <label for="lastname" class="field prepend-icon">
                                                                        <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Apellido">
                                                                        <label for="lastname" class="field-icon"><i class="fa fa-user"></i>
                                                                        </label>
                                                                    </label>
                                                                </div>
                                                                <!-- end section -->
                                                            </div>
                                                            <!-- end .section row section -->

                                                            <div class="section">
                                                                <label for="email" class="field prepend-icon">
                                                                    <input type="email" name="email" id="email" class="gui-input" placeholder="Email">
                                                                    <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                                                    </label>
                                                                </label>
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section">
                                                                <div class="smart-widget sm-right">
                                                                    <label for="username" class="field prepend-icon">
                                                                        <input type="text" name="username" id="username" class="gui-input" placeholder="Usuario">
                                                                        <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                                        </label>
                                                                    </label>

                                                                </div>
                                                                <!-- end .smart-widget section -->
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section">
                                                                <label for="password" class="field prepend-icon">
                                                                    <input type="text" name="password" id="password" class="gui-input" placeholder="Password">
                                                                    <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                                    </label>
                                                                </label>
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section">
                                                                <label for="confirmPassword" class="field prepend-icon">
                                                                    <input type="text" name="confirmPassword" id="confirmPassword" class="gui-input" placeholder="Reingrese Password">
                                                                    <label for="confirmPassword" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                                    </label>
                                                                </label>
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section-divider mv40">
                                                                <span>Tipo de Usuario</span>
                                                            </div>
                                                            <!-- .section-divider -->

                                                            <div class="section mb15">
                                                                <div class="radio-custom square mb5">
                                                                    <input type="radio" id="radioExample13" name="tipo_user">
                                                                    <label for="radioExample13">Administrador</label>
                                                                </div>
                                                                <div class="radio-custom square radio-primary mb5">
                                                                    <input type="radio" id="radioExample14" name="tipo_user">
                                                                    <label for="radioExample14">Logistica</label>
                                                                </div>
                                                                <div class="radio-custom square radio-success mb5">
                                                                    <input type="radio" id="radioExample15" name="tipo_user">
                                                                    <label for="radioExample15">Social</label>
                                                                </div>
                                                                <div class="radio-custom square radio-info mb5">
                                                                    <input type="radio" id="radioExample16" name="tipo_user">
                                                                    <label for="radioExample16">Médico Clinico</label>
                                                                </div>
                                                                <div class="radio-custom square radio-warning mb5">
                                                                    <input type="radio" id="radioExample17" name="tipo_user">
                                                                    <label for="radioExample17">Odontólogo</label>
                                                                </div>
                                                                <div class="radio-custom square radio-danger mb5">
                                                                    <input type="radio" id="radioExample18" name="tipo_user">
                                                                    <label for="radioExample18">Oftalmólogo</label>
                                                                </div>
                                                                <div class="radio-custom square radio-alert mb5">
                                                                    <input type="radio" id="radioExample19" name="tipo_user">
                                                                    <label for="radioExample19">Ginecólogo</label>
                                                                </div>
                                                                <div class="radio-custom square radio-system mb5">
                                                                    <input type="radio" id="radioExample20" name="tipo_user">
                                                                    <label for="radioExample20">Obstetra</label>
                                                                </div>
                                                                <div class="radio-custom square radio-system mb5">
                                                                    <input type="radio" id="radioExample21" name="tipo_user">
                                                                    <label for="radioExample21">Psicólogo</label>
                                                                </div>
                                                                <div class="radio-custom square radio-system mb5">
                                                                    <input type="radio" id="radioExample22" name="tipo_user">
                                                                    <label for="radioExample22">Nutricionista</label>
                                                                </div>
                                                                <div class="radio-custom square radio-system mb5">
                                                                    <input type="radio" id="radioExample23" name="tipo_user">
                                                                    <label for="radioExample23">Radiologo</label>
                                                                </div>

                                                            </div>
                                                            <!-- end section -->

                                                        </div>
                                                        <!-- end .form-body section -->
                                                        <div class="panel-footer clearfix">
                                                            <button type="submit" class="button btn-primary pull-right">Crear Usuario</button>
                                                        </div>
                                                        <!-- end .form-footer section -->
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>




@endsection