@extends('template')

@section('content')

            <div class="table-responsive col-xs-12 col-md-10 col-md-offset-1">
                <table class="table table-hover table-striped table-bordered table-responsive text-center">
                    <thead class="responsive">
                        <tr class="responsive bg-info">
                            <td>Nombre</td>
                            <td>Usuario</td>
                            <td>Email</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>

                    <tbody>
                        @if($users->count() > 0)
                            @foreach($users as $user)

                                <tr class="responsive">
                                    <td> {!! $user->fullName !!} </td>
                                    <td> {!! $user->user !!} </td>
                                    <td> {!! $user->email !!} </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-danger"><i class="fa fa-remove"></i> </a>

                                            <a href="{{ route('usersedit', $user->id) }}" class="btn btn-system"><i class="fa fa-edit"></i> </a>

                                            {{--<a href="{{ route('usersdelete', $user->id) }}" class="btn btn-danger"><i class="fa fa-remove"></i> </a>--}}

                                        </div>
                                    </td>

                                </tr>

                            @endforeach
                        @else
                            <tr class="responsive bg-info">
                                <td colspan="3" class="text-danger"> No hay usuarios registrados </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

@endsection