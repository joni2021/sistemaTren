@extends('template')
    @section('content')

                <div class="admin-form theme-info mw700 center-block" id="login1">

                    <div class="panel panel-info mt10 br-n">
                        @if(isset($rol))
                            {!! Form::model($rol,['route' => ['rolesupdate',$rol->id], 'method' => 'put','id' => 'account2']) !!}
                        @else
                            {!! Form::open(['route' => 'rolesstore', 'method' => 'POST','id' => 'account2']) !!}
                        @endif
                            <div class="panel-body p25 bg-light">
                                <div class="section-divider mt10 mb40">
                                    <span>Complete los siguientes campos</span>
                                </div>
                                <!-- .section-divider -->

                                <div class="section row">
                                    <div class="section">

                                            {!!Form::label('name','Nombre', array('class' => 'control-label'))!!}
                                            <div class="form-group field prepend-icon">
                                                @if(isset($rol))
                                                    {!!Form::text('name',$rol->name,array('class' => 'gui-input','placeholder' => 'Ingrese el nombre del rol'))!!}
                                                @else
                                                    {!!Form::text('name','',array('class' => 'gui-input','placeholder' => 'Ingrese el nombre del rol'))!!}
                                                @endif
                                                <label for="name" class="field-icon"><i class="imoon imoon-users"></i>
                                                </label>
                                            </div>
                                            {!!Form::label('description','Descripción', array('class' => 'control-label'))!!}
                                            <div class="form-group field prepend-icon">
                                                @if(isset($rol))
                                                    {!!Form::textarea('description',$rol->description,array('class' => 'gui-textarea','placeholder' => 'Ingrese una descripción'))!!}
                                                @else
                                                    {!!Form::textarea('description','',array('class' => 'gui-textarea','placeholder' => 'Ingrese una descripción'))!!}
                                                @endif
                                                <label for="description" class="field-icon"><i class="glyphicon glyphicon-tags"></i>
                                                </label>
                                            </div>
                                            {!!Form::label('nivel','Nivel', array('class' => 'control-label'))!!}
                                            <div class="form-group field prepend-icon">
                                                @if(isset($rol) && ($rol->level != ""))
                                                    <input type="number" name="level" class="gui-input" min="0" value="{!! $rol->level !!}">
                                                @else
                                                    <input type="number" name="level" class="gui-input" min="0" value="1">
                                                @endif
                                                <label for="nivel" class="field-icon"><i class="imoon imoon-users"></i>
                                                </label>
                                            </div>
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end .form-body section -->
                                <div class="panel-footer clearfix">
                                    {!! Form::submit('Crear',array('class' => 'button btn-primary pull-right')) !!}
                                </div>
                                <!-- end .form-footer section -->
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>


    @endsection