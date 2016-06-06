@extends('template')

@section('content')

    <div class="col-md-10 center-block">

        <header id="topbar">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <h2>Especialidad Oftalmologia</h2>
                    </li>
                </ol>
            </div>
        </header>

    </div>

    <div class="table-responsive col-xs-12 col-md-10 col-md-offset-1">
        <table class="table table-hover table-striped table-bordered table-responsive text-center">
            <thead class="responsive">
            <tr class="responsive bg-info">
                <td>#</td>
                <td>Paciente</td>
                <td></td>
               </tr>
            </thead>

            <tbody>

            @if(count($turnos) > 0)
                @foreach($turnos as $turno)
                    <tr class="responsive">
                        <td></td>
                        <td>{{ $turno->Paciente->getFullNamePacienteAttribute() }}</td>
                        <td>{{ $turno->turno }} </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-system"><i class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger dark"><i class="fa fa-remove"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr class="responsive bg-info">
                    <td colspan="4" class="text-danger"> No hay pacientes asignados </td>
                </tr>
            @endif

            </tbody>
        </table>
    </div>

@endsection