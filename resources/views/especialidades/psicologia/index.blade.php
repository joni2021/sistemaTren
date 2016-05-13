@extends('template')

@section('content')

    <div class="table-responsive col-xs-12 col-md-10 col-md-offset-1">
        <table class="table table-hover table-striped table-bordered table-responsive text-center">
            <thead class="responsive">
            <tr class="responsive bg-info">
                <td>#</td>
                <td>Paciente</td>
               </tr>
            </thead>

            <tbody>

                    <tr class="responsive">
                        <td> 1 </td>
                        <td> Perez, jorge </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-system"><i class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-danger dark"><i class="fa fa-remove"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                <tr class="responsive bg-info">
                    <td colspan="4" class="text-danger"> No hay tipos de usuarios registrados </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection