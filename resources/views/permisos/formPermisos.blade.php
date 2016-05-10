@extends('template')
    @section('content')

                <div class="admin-form theme-info mw700 center-block" id="login1">

                    <div class="panel panel-info mt10 br-n">
                        {!! Form::open(['route' => 'permisosstore', 'method' => 'POST','id' => 'account2']) !!}

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
                                                <select name="accion" id="accion" class="form-control gui-input">
                                                    <option value="0">Seleccion acción</option>
                                                    <option value="list">Listar</option>
                                                    <option value="create">Crear</option>
                                                    <option value="edit">Editar</option>
                                                    <option value="delete">Borrar</option>
                                                </select>
                                                <label for="accion" class="field-icon"><i class="fa fa-angle-down"></i>
                                                </label>
                                            </div>

                                            <div class="form-group field prepend-icon">
                                                {!!Form::text('name','',array('class' => 'gui-input','placeholder' => 'Ingrese el nombre del permiso'))!!}
                                                <label for="name" class="field-icon"><i class="imoon imoon-users"></i>
                                                </label>
                                            </div>
                                        </div>



                                        {!!Form::label('description','Descripción', array('class' => 'control-label'))!!}

                                        <div class="form-group field prepend-icon">
                                            {!!Form::textarea('description','',array('class' => 'gui-textarea','placeholder' => 'Ingrese una descripción'))!!}
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