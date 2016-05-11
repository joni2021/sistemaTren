@extends('template')

@section('content')


            <div class="table-responsive col-xs-12 col-md-10 col-md-offset-1">
                <table class="table table-hover table-striped table-bordered table-responsive text-center">
                    <thead class="responsive">
                        <tr class="responsive bg-info">
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Nivel</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>

                    <tbody>
                        @if($roles->count() > 0)
                            @foreach($roles as $rol)
                                <tr class="responsive">
                                    <td> {!! $rol->name !!} </td>
                                    <td> {!! $rol->description !!} </td>
                                    <td> {!! $rol->level !!} </td>
                                    <td>
                                        <div class="btn-group inline-children">
                                            <a class="btn btn-system" href="{!! route('rolesedit',$rol->id) !!}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {!! Form::open(['route' => ['rolesdelete',$rol->id], 'method' => 'POST','id' => 'account2','class' => 'form-inline']) !!}
                                                <button type="submit" class="btn btn-danger dark">
                                                    <i class="fa fa-remove"></i>
                                                </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="responsive bg-info">
                                <td colspan="4" class="text-danger"> No hay tipos de usuarios registrados </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>






@endsection