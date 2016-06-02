@extends('template')
@section('content')

    <h2 class="lh30 mt15 text-center"><b class="text-primary">Su Turno </b>fue asignado correctamente
        @if($turno->prioridad == true)
            <b class="text-primary">con Prioridad. </b>
        @endif

    </h2>

    <div class="row">
        <div class="col-md-9 center-block">
            <div id="dock-panel">
                <div class="dock-item" data-title="A Panel">
                    <div class="panel">
                        <div class="panel-heading">
                                <span class="panel-icon pl5"><i class="fa fa-pencil"></i> </span>
                            <span class="panel-title">Apellido y Nombre: {{ $turno->Paciente->getFullNamePacienteAttribute() }}</span>
                        </div>
                        <div class="panel-body">
                            <ul class="fs14 list-unstyled list-spacing-10 mb10">
                                <li>
                                    <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                    <b> Apellido y Nombre:</b> {{ $turno->Paciente->getFullNamePacienteAttribute() }}
                                </li>
                                <li>
                                    <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                    <b> Especialidad Asignada:</b> {{ $turno->Especialidad->especialidad }}
                                </li>
                                <li>
                                    <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                                    <b> Fecha y Hora: </b>
                                    <b> 06/05/2016 - 12:40 </b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-12">
                <div class="panel panel-tile text-center">
                    <div class="panel-heading hidden">
                        <span class="panel-title"><i class="fa fa-pencil"></i> </span>
                    </div>
                    <div class="panel-body">
                        <h1 class="fs35 mbn">{{$turno->turno}}</h1>
                        <h6 class="text-primary">N° DE TURNO</h6>
                    </div>
                    <div class="panel-footer bg-primary light br-n p12">
                     <span class="fs11"><i class="fa fa-arrow-up"></i><b> {{ $turno->Especialidad->especialidad }}</b> </span>
                    </div>


                </div>
            </div>


        </div>

    </div>

@endsection