@extends('template')

@section('content')


<section id="content">

                <h2 class="lh30 mt15 text-center"><b class="text-primary">Seleccione</b> a quien desea derivar el Paciente: <b class="text-primary"> {{ $paciente->getFullNamePacienteAttribute()}} </b></h2>
                

                <div class="row">
                    <div class="col-md-9 center-block">
                        {!! Form::open(['route' => 'pacientespostDerivaciones', 'method' => 'POST','class' => 'form-horizontal']) !!}
                        <div class="bg-light br-a br-light p15 mb20 text-center text-muted">
                            <div class="row wizard-options">

                                @foreach($especialidades as $especialidad )
                                <div class="col-xs-4 col-sm-2 ph10">
                                    <a class="holder-style p15 holder-active" data-steps-style="steps-left">
                                        <span class="fa fa-user-md align-left holder-icon"></span>
                                        <div class="radio-custom radio-success mb5">
                                                <input type="radio" id="radioExample{{$especialidad->id}}" name="especialidades_id" value="{{$especialidad->id}}">
                                                <label for="radioExample{{$especialidad->id}}">{{$especialidad->especialidad}}</label>
                                         </div>
                                    </a>
                                </div>
                                @endforeach
                                <input type="hidden" name="pacientes_id" value="{{ $paciente->id }}">
                            </div>
                        </div>
                        <div class="panel-footer clearfix">

                              <div class="checkbox-custom fill checkbox-primary mb5">
                                    <input type="checkbox"  id="checkboxDefault13" name="prioridad">
                                    <label for="checkboxDefault13">Turno prioritario</label>

                                <button type="submit" class="button btn-primary pull-right">Asignar Turno</button>
                              </div>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

            </section>



@endsection

