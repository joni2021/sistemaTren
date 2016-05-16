@extends('template')
    @section('content')

                <div class="admin-form theme-info mw700 center-block" id="login1">

                    <div class="panel panel-info mt10 br-n">
                        @if(isset($permiso))
                            {!! Form::model($permiso,['route' => ['permisosupdate',$permiso->id], 'method' => 'put','id' => 'account2']) !!}
                        @else
                            {!! Form::open(['route' => 'permisosstore', 'method' => 'POST','id' => 'account2']) !!}
                        @endif
                            <div class="panel-body p25 bg-light">
                                <div class="section-divider mt10 mb40">
                                    <span>Complete los siguientes campos</span>
                                </div>
                                <!-- .section-divider -->

                                <div class="section row">
                                    <div class="section">
                                        {!!Form::label('name','Nombre', array('class' => 'control-label'))!!}
                                        <div class="nombre">
                                            <div class="form-group field append-icon">
                                                <select name="action" id="action" class="form-control gui-input">
                                                    <option value=0 @if(!isset($permiso)) selected @endif>Seleccion acción</option>
                                                    <option value="list" @if(isset($permiso) && $permiso->action() == "list") selected="selected" @endif>Listar</option>
                                                    <option value="create" @if(isset($permiso) && $permiso->action() == "create") selected="selected" @endif>Crear</option>
                                                    <option value="edit" @if(isset($permiso) && $permiso->action() == "edit") selected="selected" @endif>Editar</option>
                                                    <option value="delete" @if(isset($permiso) && $permiso->action() == "delete") selected="selected" @endif>Borrar</option>
                                                </select>
                                                <label for="accion" class="field-icon"><i class="fa fa-angle-down"></i>
                                                </label>
                                            </div>

                                            <div class="form-group field prepend-icon">
                                                @if(isset($permiso))
                                                    {!!Form::text('name',$permiso->nameSinAction(),array('class' => 'gui-input','placeholder' => 'Ingrese el nombre del permiso'))!!}
                                                @else
                                                    {!!Form::text('name','',array('class' => 'gui-input','placeholder' => 'Ingrese el nombre del permiso'))!!}
                                                @endif
                                                <label for="name" class="field-icon"><i class="imoon imoon-users"></i>
                                                </label>
                                            </div>
                                        </div>



                                        {!!Form::label('description','Descripción', array('class' => 'control-label'))!!}

                                        <div class="form-group field prepend-icon">
                                            @if(isset($permiso))
                                                {!!Form::textarea('description',$permiso->description,array('class' => 'gui-textarea','placeholder' => 'Ingrese una descripción'))!!}
                                            @else
                                                {!!Form::textarea('description','',array('class' => 'gui-textarea','placeholder' => 'Ingrese una descripción'))!!}
                                            @endif
                                            <label for="description" class="field-icon"><i class="glyphicon glyphicon-tags"></i>
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