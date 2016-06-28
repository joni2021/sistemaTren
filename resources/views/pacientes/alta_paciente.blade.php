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
                                    <input type="radio" name="tipo_dni" id="inlineRadio2" value="1">DNI</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio2" value="2">LC</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio3" value="3">LE</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio4" value="4">Cedula</label>
                                <label class="radio-inline mr10">
                                    <input type="radio" name="tipo_dni" id="inlineRadio5" value="5">Pasaporte</label>
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
                                    <label class="radio-inline mr10">
                                    <input type="radio" name="sexo" id="inlineRadio5" value="1">Masculino</label>

                                    <label class="radio-inline mr10">
                                    <input type="radio" name="sexo" id="inlineRadio5" value="2">Femenino</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fecha_nacimiento" class="col-lg-3 control-label">Fecha nacimiento:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="col-lg-3 control-label">Teléfono:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="telefono" name="telefono" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nacionalidad" class="col-lg-3 control-label">Nacionalidad:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lugar_nacimiento" class="col-lg-3 control-label">Lugar de Nacimiento:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="calle" class="col-lg-3 control-label">Calle:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="calle" name="calle" >
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" id="numero" name="numero" placeholder="N°">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="manzana" class="col-lg-3 control-label">Manzana:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="manzana" name="manzana" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="barrio" class="col-lg-3 control-label">Barrio:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="barrio" name="barrio" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="partido" class="col-lg-3 control-label">Partido:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="partido" name="partido" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="localidad" class="col-lg-3 control-label">Localidad:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="localidad" name="localidad" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="plan_social" class="col-lg-3 control-label">Plan social:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="plan_social" name="plan_social" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ocupacion" class="col-lg-3 control-label">Ocupación:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="ocupacion" name="ocupacion" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Sabe leer:</label>
                            <div class="col-md-9">
                                <div class="switch switch-info switch-inline">
                                    <input id="exampleCheckboxSwitch1" type="checkbox" checked="" name="lectura">
                                    <label for="exampleCheckboxSwitch1"></label>
                                </div>

                            </div>
                        </div>

                            



                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-3 control-label">Sabe Escribir:</label>
                            <div class="col-lg-8">
                                <div class="switch switch-info switch-inline">
                                    <input id="exampleCheckboxSwitch2" type="checkbox" checked="" name="escritura" >
                                    <label for="exampleCheckboxSwitch2"></label>
                                </div>
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
                                        <input type="text" class="form-control" id="inputPassword" name="observaciones" >
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