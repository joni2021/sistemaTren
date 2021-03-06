@extends('template')
@section('css')
        <!-- Vendor CSS -->
<link rel="stylesheet" type="text/css" href="vendor/plugins/magnific/magnific-popup.css">
<!-- Admin Modals CSS -->
<link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-modal/adminmodal.css">

<style>
    .multiselect-item .input-group,.form-inline .multiselect-container.dropdown-menu label.checkbox{
        width:100% !important;
    }



</style>
@endsection
@section('content')


            <div class="table-responsive col-xs-12 col-md-10 col-md-offset-1">
                <table class="table table-hover table-striped table-bordered table-responsive text-center">
                    <thead class="responsive">
                        <tr class="responsive bg-info">
                            <td>Localidad</td>
                            <td>Provincia</td>
                            <td>Llegada</td>
                            <td>Partida</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>

                    <tbody>
                        @if($comisiones->count() > 0)
                            @foreach($comisiones as $comision)
                                <tr class="responsive">
                                    <td> {!! $comision->localidad !!} </td>
                                    <td> {!! $comision->provincia !!} </td>
                                    <td> {!! $comision->fecha_llegada !!} </td>
                                    <td> {!! $comision->fecha_partida !!} </td>
                                    <td>
                                        <div class="btn-group inline-children">
                                            <a href="#modal-form" data-id="{!! $comision->id !!}" class="btn-modal btn btn-info dark item-checked" data-effect="mfp-zoomIn">
                                                <i class="glyphicons glyphicons-user_add"></i>
                                            </a>
                                            <a class="btn btn-system" href="{!! route('comisionesedit',$comision->id) !!}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            {!! Form::open(['route' => ['comisionesdelete',$comision->id], 'method' => 'POST','id' => 'account2','class' => 'form-inline']) !!}
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
                                <td colspan="5" class="text-danger"> No hay comisiones creadas </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>


            <!-- Admin Form Popup -->
            <div id="modal-form" class=" popup-basic admin-form mfp-with-anim mfp-hide">
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title"><i class="glyphicons glyphicons-user_add"></i>Asignar usuarios</span>
                    </div>
                    <!-- end .panel-heading section -->

                    {!! Form::open(['route' => ['comisionesasignar',0], 'method' => 'POST','id' => 'formAsignarUsuarios','class' => 'form-inline']) !!}
                        <div class="panel-body p25">
                            <div class="section row">
                                <div class="col-xs-12">

                                    {!! Form::select('user_id[]',$user, 'users' ,['id' => 'users','multiple' => 'multiple']) !!}

                                </div>
                                <!-- end section -->

                            </div>
                            <!-- end section row section -->

                        </div>
                        <!-- end .form-body section -->

                        <div class="panel-footer">
                            <button type="submit" class="button btn-primary">Agregar usuarios</button>
                        </div>
                        <!-- end .form-footer section -->
                    {!! Form::close() !!}
                </div>
                <!-- end: .panel -->
            </div>
            <!-- end: .admin-form -->


@endsection

@section('js')
        <!-- Page Plugins -->
            <script type="text/javascript" src="vendor/plugins/magnific/jquery.magnific-popup.js"></script>

            <!-- Admin Forms Javascript -->
            <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-monthpicker.min.js"></script>
            <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
            <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
            <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
            <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>
    <script>
        $('#users').multiselect({
            enableClickableOptGroups: true,
            enableCollapsibleOptGroups: true,
            enableFiltering: true,
            includeSelectAllOption: true,
            dropUp: true,
            buttonWidth: '100%'
        });

        // Form Skin Switcher
        $(".btn-group").on('click','.btn-modal', function(ev) {
            ev.preventDefault();

            var self = $(this);
            var id = $(self).attr('data-id');

            var usuarios = 0;
            var selected = new Array();

            $.get(location.href+"/"+id+"/consultarUsuarios",{_token: $("meta[name='csrf-token']").attr('content'), id: id},function(ev){
                usuarios = ev;

                if(usuarios != ""){

                    $("#users option").each(function(ev){
                        var opt = $(this);
                        var a = $(opt).val();
                        $.each(usuarios,function(key,val){
                            if(a == key){
                                selected.push(key);
                                if($(opt).attr("selected") != "selected"){
                                    $(opt).attr("selected",true);
                                }
                            }
                        });
                    });
                    $('#users').multiselect('refresh');
               }

                // Inline Admin-Form example
                $.magnificPopup.open({
                    removalDelay: 500, //delay removal by X to allow out-animation,
                    items: {
                        src: $(".btn-modal").attr('href')
                    },
                    callbacks: {
                        beforeOpen: function(e) {
                            var Animation = $(self).attr('data-effect');
                            this.st.mainClass = Animation;
//                        $('#users').multiselect('refresh');
                            $('#formAsignarUsuarios').attr('action',location.href+"/"+id+"/asignar");
                            if(selected.length > 0)
                                $('#users').multiselect('select',selected);

                        },close: function(e){
                            $("#users option").each(function(ev){
                                $(this).attr('selected',false);
//                            $('#users').multiselect('refresh');
                            });
                            $('#users').multiselect('deselect','1');
                        }
                    },
                    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                });

            });

        });

    </script>
    @endsection