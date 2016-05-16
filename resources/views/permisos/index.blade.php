@extends('template')

@section('content')


            <div class="table-responsive col-xs-12 col-md-10 col-md-offset-1">
                <table class="table table-hover table-striped table-bordered table-responsive text-center">
                    <thead class="responsive">
                        <tr class="responsive bg-info">
                            <td>Nombre</td>
                            <td>Slug</td>
                            <td>Detalle</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>

                    <tbody>
                        @if($permisos->count() > 0)
                            @foreach($permisos as $permiso)
                                <tr class="responsive">
                                    <td> {!! $permiso->name !!} </td>
                                    <td> {!! $permiso->slug !!} </td>
                                    <td> {!! $permiso->description !!} </td>
                                    <td>
                                        <div class="btn-group inline-children">
                                            <a class="btn btn-system" href="{!! route('permisosedit',$permiso->id) !!}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {!! Form::open(['route' => ['permisosdelete',$permiso->id], 'method' => 'POST','id' => 'account2','class' => 'form-inline']) !!}
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
                                <td colspan="4" class="text-danger"> No hay permisos registrados </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>






@endsection