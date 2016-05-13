@extends('template')

@section('content')
    <div class="col-md-9 center-block">

        <header id="topbar">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <h2>Asignación de Turno</h2>
                    </li>
                </ol>
            </div>
        </header>

        @if(empty($paciente))
            {!! Form::open(['route' => 'pacientesstore', 'method' => 'POST','class' => 'form-horizontal']) !!}
        @else
            {!! Form::model($paciente,['route' => ['pacientesupdate',$paciente], 'method' => 'PUT','class' => 'form-horizontal']) !!}
        @endif

        <div id="dock-panel">
            <div class="dock-item" data-title="A Panel">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Datos Personales</span>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label for="multiselect4" class="col-lg-3 control-label">Tipo DNI:</label>
                            <div class="col-md-9">
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio1" value="DNI">DNI</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio2" value="LC">LC</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio3" value="LE">LE</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio4" value="Cedula">Cedula</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio5" value="Pasaporte">Pasaporte</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dni" class="col-lg-3 control-label">DNI:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="dni" name="dni">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Apellido:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="apellido" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Nombre:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Sexo:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="sexo" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Fecha nacimiento:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="fecha_nacimiento">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Teléfono:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="telefono" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Nacionalidad:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="id_nacionalidad" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Lugar de Nacimiento:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="id_lugar_nacimiento" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Sabe Leer:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="lectura" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Sabe Escribir:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="inputPassword" name="escritura">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div id="dock-panel">
            <div class="dock-item" data-title="A Panel">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Datos Familia</span>
                    </div>
                    <div class="panel-body">

                         <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Hijos Mayores:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="hijos_mayores">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Hijos Menores:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="hijos_menores">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Enfermedad Crónica:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="enfermedad_cronica">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Enfermedad Rs:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="enfermedad_rs">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Discapacidad:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="discapacidad">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Tipo:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="tipo_discapacidad" >
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>


        <div id="dock-panel">
            <div class="dock-item" data-title="A Panel">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">Datos Médicos</span>
                    </div>
                    <div class="panel-body">

                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Presión Arterial Max.:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="presion_arterial_max">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Presión Arterial Min.:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="presion_arterial_min">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Glusemia:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="glusemia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Colesterol:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword"  name="colesterol">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Perímetro Abdominal:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="perimetro_abdominal" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Perímetro Craneal:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="perimetro_craneal">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Percentilo:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="percentilo">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">PCO:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="pco">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">IMC:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="imc">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Altura:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="altura">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Peso:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="peso">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 control-label">Talla:</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="inputPassword" name="talla" >
                                </div>
                            </div>

                            <div class="form-group" >
                                    <label for="inputPassword" class="col-lg-3 control-label">Observaciones:</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="inputPassword" name="observaciones">
                                    </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="panel-footer clearfix">
            <button type="submit" class="btn btn-default btn-block ">Crear Paciente</button>
        </div>
        {!! Form::close() !!}
    </div>

@endsection