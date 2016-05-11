@extends('template')

@section('content')


    <div class="row">
        <div class="col-xs-12 center-block">
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <h2>Asignación de Turno</h2>
                        </li>

                    </ol>
                </div>
            </header>

                        
            <div class="panel text-center br-a br-light">

                            <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Datos Personales</span>
                            </div>
                            <div class="panel-body">
                                @if(empty($paciente))
                                    {!! Form::open(['route' => 'pacientescreate', 'method' => 'POST','class' => 'form-horizontal']) !!}
                                @else
                                    {!! Form::model($paciente,['route' => ['pacientesupdate',$paciente], 'method' => 'PUT','class' => 'form-horizontal']) !!}
                                @endif

                                    <div class="form-group">
                                        <label for="multiselect4" class="col-lg-3 control-label">Tipo DNI:</label>
                                        
                                        <div class="col-md-9">
                                            <label class="radio-inline mr10">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">DNI</label>
                                            <label class="radio-inline mr10">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">LC</label>
                                            <label class="radio-inline mr10">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">LE</label>
                                            <label class="radio-inline mr10">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">Cedula</label>
                                            <label class="radio-inline mr10">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">Pasaporte</label>
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
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Nombre:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Sexo:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Fecha nacimiento:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Teléfono:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Nacionalidad:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Lugar de Nacimiento:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Sabe Leer:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Sabe Escribir:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>                                    
                                {!! Form::close() !!}
                            </div>
                        </div>
                            
                            </div>
            <div class="panel text-center br-a br-light">

                            <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Datos Familia</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal"            >
                                   
                                  
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Hijos Mayores:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Hijos Menores:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Enfermedad Crónica:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Enfermedad Rs:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Discapacidad:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Tipo:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                            
                            </div>

            <div class="panel text-center br-a br-light">

                            <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Datos Médicos</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal"            >
                                   
                                  
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Presión Arterial Max.:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Presión Arterial Min.:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Glusemia:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Colesterol:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Perímetro Abdominal:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Perímetro Craneal:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Percentilo:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">PCO:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">IMC:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Altura:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Peso:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Talla:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Observaciones:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="inputPassword"               >
                                        </div>
                                    </div>
  
                                </form>
                            </div>
                        </div>
                            
                            </div>


                            

        </div>
    </div>





@endsection