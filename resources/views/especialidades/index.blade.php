@extends('template')

@section('content')

    <div class="col-md-10 center-block">

        <header id="topbar">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <h2>Especialidad: {!! $especialidad->especialidad !!}</h2>
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
                <td>Turno N°</td>
                <td>Acciones</td>
               </tr>
            </thead>

            <tbody>

            @if(count($turnos) > 0)
                <?php $count = 1; ?>
                @foreach($turnos as $turno)
                    <tr class="responsive">
                        <td><?php echo $count; ?></td>
                        <td>{{ $turno->Paciente->fullName }}</td>
                        <td>{{ $turno->turno }} </td>
                        <td>
                            <div class="btn-group">
                                <a href="{!! route('pacientesedit',$turno->Paciente->id) !!}" class="btn btn-system"><i class="fa fa-edit"></i>
                                </a>
                                @if(Auth::user()->hasRole('admin','admision'))
                                    {!! Form::open(['route' => ['especialidaddelete',$turno->id], 'method' => 'POST', 'class' => 'inline-block']) !!}
                                        <button type="submit" class="btn btn-danger dark">
                                            <i class="fa fa-remove"></i>
                                        </button>
                                    {!! Form::close() !!}
                                @endif
                                @if(Auth::user()->hasRole('admin','odontologia','oftalmologia','ginecologia','obstetricia','psicologia','nutricionista','radiologia'))
                                    {!! Form::open(['route' => ['pacientesderivacionesEdit',$turno->Paciente->id], 'method' => 'POST', 'class' => 'inline-block pull-left']) !!}
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa fa-mail-forward"></i>
                                    </button>
                                    {!! Form::close() !!}
                                 @endif
                            </div>
                        </td>
                    </tr>
                    <?php $count++; ?>
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