@extends('template')

@section('content')
                <div class="col-md-9 center-block">
                    <div id="dock-panel">
                        <div class="dock-item" data-title="A Panel">
                                    <div class="panel">
                                        <div class="panel-body">

                                            @if(isset($model))
                                                {!! Form::model($model,['route'=>['usersupdate',$model->id]]) !!}
                                            @else
                                                {!! Form::open(['route'=>'usersstore']) !!}
                                            @endif

                                            <div class="admin-form theme-info" id="login1">
                                                        <div class="panel-body p25 bg-light">
                                                            <div class="section-divider mt10 mb40">
                                                                <span>Ingreso Nuevo Usuario</span>
                                                            </div>
                                                            <!-- .section-divider -->

                                                            <div class="section row">
                                                                <div class="col-md-6">
                                                                    <label for="firstname" class="field prepend-icon">
                                                                        {!! Form::text('name', null, array('class'=> 'gui-input', 'placeholder'=>'Nombre' )) !!}
                                                                        <label for="firstname" class="field-icon"><i class="fa fa-user"></i>
                                                                        </label>
                                                                    </label>
                                                                </div>
                                                                <!-- end section -->

                                                                <div class="col-md-6">
                                                                    <label for="lastname" class="field prepend-icon">
                                                                        {!! Form::text('last_name', null, array('class'=> 'gui-input', 'placeholder'=>'Apellido' )) !!}
                                                                        <label for="lastname" class="field-icon"><i class="fa fa-user"></i>
                                                                        </label>
                                                                    </label>
                                                                </div>
                                                                <!-- end section -->
                                                            </div>
                                                            <!-- end .section row section -->

                                                            <div class="section">
                                                                <label for="email" class="field prepend-icon">
                                                                    {!! Form::text('email', null, array('id' => 'email', 'class'=> 'gui-input', 'placeholder'=>'Email' )) !!}
                                                                    <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                                                    </label>
                                                                </label>
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section">
                                                                <div class="smart-widget sm-right">
                                                                    <label for="username" class="field prepend-icon">
                                                                        {!! Form::text('user', null, array('class'=> 'gui-input', 'placeholder'=>'Usuario' )) !!}
                                                                        <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                                        </label>
                                                                    </label>

                                                                </div>
                                                                <!-- end .smart-widget section -->
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section">
                                                                <label for="password" class="field prepend-icon">
                                                                    {!! Form::password('password',array('class' => 'gui-input', 'placeholder'=>'Password' )) !!}
                                                                    <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                                    </label>
                                                                </label>
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section">
                                                                <label for="password_confirmation" class="field prepend-icon">
                                                                    {!! Form::password('password_confirmation',array('class' => 'gui-input', 'placeholder'=>'Reingrese Password' )) !!}
                                                                    <label for="password_confirmation" class="field-icon"><i class="fa fa-unlock-alt"></i>
                                                                    </label>
                                                                </label>
                                                            </div>
                                                            <!-- end section -->

                                                            <div class="section-divider mv40">
                                                                <span>Tipo de Usuario</span>
                                                            </div>
                                                            <!-- .section-divider -->

                                                            <div class="section mb15">

                                                                @if(isset($model))
                                                                    @foreach($roles as $rol)

                                                                        <div class="form-group">
                                                                            <div class="col-sm-12 pl15">
                                                                                <input type="checkbox" name="role_id[]" value="{{$rol->id}}"  {{ $model->isOne($rol->id)  ? 'checked' : '' }}>
                                                                                <label for="checkboxExample20">{{ $rol->name }}</label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    @if($roles->count() > 0)

                                                                        <div class="form-group">
                                                                            <div class="col-sm-12 pl15">

                                                                                @foreach($roles as $rol)
                                                                                <div>
                                                                                    <input type="checkbox" name="role_id[]" id="checkboxExample20" value="{{$rol->id}}">
                                                                                    <label for="checkboxExample20">{{ $rol->name }}</label>
                                                                                </div>
                                                                                @endforeach

                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endif
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
                                            {!! Form::close()!!}
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>

@endsection