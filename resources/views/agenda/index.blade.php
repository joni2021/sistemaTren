@extends('template')

@section('css')
    <!-- Plugin CSS  -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/fullcalendar/fullcalendar.css" media="screen">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/magnific/magnific-popup.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-modal/adminmodal.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/daterange/daterangepicker.css">
@endsection
@section('content')
        <!-- Start: Content -->
        <section id="content_wrapper">


            <!-- Begin: Content -->
            <section id="content" class="table-layout">

                <!-- begin: .tray-left -->
                <aside class="tray tray-left tray290 va-t" data-tray-height="match">

                    <div class="fc-title-clone"></div>

                    <div class="section admin-form theme-primary">
                        <div class="inline-mp center-block"></div>
                    </div>


{{--                    {!! dd($comision->first()->Address()) !!}--}}
                    @if(is_array($comision))
                        <h4 class="pl10 mt25 fs13"> Seleccionar comisión</h4>
                        {!! Form::open(['route' => 'comisionesstore', 'method' => 'POST','id' => 'account2']) !!}
                            <div class="form-group">
                                {!! Form::select('comision',$comision,'comision', ['class' => 'form-control','id' => 'comision']) !!}
                                {{--<button type="submit" class="form-control">--}}
                                    {{--<span class="fa fa-search"></span>--}}
                                {{--</button>--}}
                            </div>
                        {!! Form::close() !!}
                    @else
                        <h4 class="pl10 mt25 fs13"> Eventos en <strong>{!! $comision->first()->Address() !!}</strong>
                            @if(Auth::user()->hasRole('admin'))
                                <a id="compose-event-btn" type="button" class="btn btn-info btn-xs btn-rounded" data-toggle="modal" data-target="#calendarEvent" data-effect="mfp-flipInY"><span class="fa fa-plus"></span></a>

                            @endif
                        </h4>
                    @endif




                    <hr class="mv15 br-light">
                    <div id="external-events" class="bg-dotted">

                        <!-- Standard Events -->
                        <div class='fc-event fc-event-primary' data-event="primary">
                            <div class="fc-event-icon">
                                <span class="fa fa-exclamation"></span>
                            </div>
                            <div class="fc-event-desc"><b>2:30am - </b>Meeting With Mike</div>
                        </div>
                        <div class='fc-event fc-event-info' data-event="info">
                            <div class="fc-event-icon">
                                <span class="fa fa-info"></span>
                            </div>
                            <div class="fc-event-desc"><b>2:30am - </b>Meeting With Mike</div>
                        </div>
                        <div class='fc-event fc-event-success' data-event="success">
                            <div class="fc-event-icon">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="fc-event-desc"><b>2:30am - </b>Meeting With Mike</div>
                        </div>
                        <div class='fc-event fc-event-warning' data-event="warning">
                            <div class="fc-event-icon">
                                <span class="fa fa-question"></span>
                            </div>
                            <div class="fc-event-desc"><b>2:30am - </b>Meeting With Mike</div>
                        </div>


                    </div>

                    {{--<h4 class="ph10 mt25 mb20"> Labels </h4>--}}
                    {{--<hr class="mn br-light">--}}
                    {{--<ul class="nav nav-messages p5" role="menu">--}}
                        {{--<li class="">--}}
                            {{--<a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">--}}
                                {{--Clients--}}
                                {{--<span class="fa fa-circle text-warning fs14 pull-right lh20"></span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                            {{--<a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">--}}
                                {{--Contractors--}}
                                {{--<span class="fa fa-circle text-system fs14 pull-right lh20"></span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                            {{--<a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">--}}
                                {{--Work--}}
                                {{--<span class="pull-right lh20 h-20 label label-info label-sm">11</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                            {{--<a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">--}}
                                {{--Meetings--}}
                                {{--<span class="pull-right lh20 h-20 label label-success label-sm">8</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                </aside>
                <!-- end: .tray-left -->

                <!-- begin: .tray-center -->
                <div class="tray tray-center p20 va-t">
                    <!-- Calendar  -->
                    <div id='calendar' class="admin-theme"></div>
                </div>
                <!-- end: .tray-center -->


            </section>
            <!-- End: Content -->

        </section>




    <!-- Create Calendar Event Form -->


@endsection

@if(!is_array($comision))
    @if(Auth::user()->hasRole('admin'))
        @section('modal')
            <div id="calendarEvent" class="modal fade admin-form" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="panel">
                                <div class="panel-heading">
                            <span class="panel-title"><i class="fa fa-pencil-square"></i>Agregar nuevo evento
                            </span>
                                </div>
                                <!-- end .form-header section -->

                                {!! Form::model($comision,['route' => 'comisionesstore', 'method' => 'POST','id' => 'calendarEventForm']) !!}
                                    <div class="panel-body p25">
                                        <div class="section-divider mt10 mb40">
                                            <span>{!! $comision->first()->Address() !!}</span>
                                        </div>
                                        <!-- .section-divider -->

                                        <div class="section row">
                                            <div class="col-xs-12">
                                                <label for="daterange" class="field prepend-icon">
                                                    {!! Form::text('daterange',"",array('class' => 'form-control pull-right active gui-input','id' => 'daterangepicker','placeholder' => 'Ingrese fecha del evento'))!!}
                                                    <label class="field-icon"><i class="fa fa-calendar"></i>
                                                    </label>
                                                </label>
                                            </div>
                                            <!-- end section -->
                                        </div>
                                        <!-- end .section row section -->

                                        <div class="section">
                                            <label class="field prepend-icon">
                                                {!! Form::textarea('evento',['class' => 'gui-textarea', 'placeholder' => 'Descripción']) !!}
                                                {{--<textarea class="gui-textarea" id="comment" name="comment" placeholder="Descripción"></textarea>--}}
                                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                    <!-- end .form-body section -->
                                    <div class="panel-footer text-right">
                                        <button type="submit" class="button btn-primary">Crear evento</button>
                                    </div>
                                    <!-- end .form-footer section -->
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endsection
    @endif
@endif


@section('js')
    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- Admin Forms Javascript -->
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-tcm-month.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/magnific/jquery.magnific-popup.js"></script>

    <!-- FullCalendar Plugin -->
    {{--<script src='vendor/plugins/fullcalendar/lib/moment.min.js'></script>--}}
    <script type="text/javascript" src="vendor/plugins/daterange/moment.min.js"></script>
    <script src='vendor/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script src='vendor/plugins/fullcalendar/es.js'></script>

    <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
    <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.3/fullcalendar.min.js"></script>--}}

    <script type="text/javascript">

        // Calendar form date picker
        $("#eventDate").datepicker({
            numberOfMonths: 1,
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            showButtonPanel: false,
            beforeShow: function(input, inst) {
                var newclass = 'admin-form';
                var themeClass = $(this).parents('.admin-form').attr('class');
                var smartpikr = inst.dpDiv.parent();
                if (!smartpikr.hasClass(themeClass)) {
                    inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                }
            }

        });


        // Init FullCalendar external events
        $('#external-events .fc-event').each(function() {
            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true, // maintain when user navigates (see docs on the renderEvent method)
                className: 'fc-event-' + $(this).attr('data-event') // add a contextual class name from data attr
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });

        });

        var Calendar = $('#calendar');
        var Picker = $('.inline-mp');

        // Init FullCalendar Plugin
        Calendar.fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: ''
            },
            lang: 'es',
            editable: true,
            viewRender: function(view) {
                // If monthpicker has been init update its date on change
                if (Picker.hasClass('hasMonthpicker')) {
                    var selectedDate = Calendar.fullCalendar('getDate');
                    var formatted = moment(selectedDate, 'MM-DD-YYYY').format('MM/YY');
                    Picker.monthpicker("setDate", formatted);
                }
                // Update mini calendar title
                var titleContainer = $('.fc-title-clone');
                if (!titleContainer.length) {
                    return;
                }
                titleContainer.html(view.title);
            },
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if (!$(this).hasClass('event-recurring')) {
                    $(this).remove();
                }
            },
            eventRender: function(event, element) {
                // create event tooltip using bootstrap tooltips
                $(element).attr("data-original-title", event.title);
                $(element).tooltip({
                    container: 'body',
                    delay: {
                        "show": 100,
                        "hide": 200
                    }
                });
                // create a tooltip auto close timer
                $(element).on('show.bs.tooltip', function() {
                    var autoClose = setTimeout(function() {
                        $('.tooltip').fadeOut();
                    }, 3500);
                });
            }
            @if(!is_array($comision))
                @if($comision->first()->Agenda->count() > 0)
                    ,events: [
                    @foreach($comision->first()->Agenda as $i => $a)
                        @if($i > 0)
                            ,
                        @endif
                        {
                            title: "{!! $a->evento !!}",
                            start: '{!! $a->fecha_inicio !!}'
                            @if($a->fecha_fin != "")
                                ,end: "{!! $a->fecha_fin !!}"
                            @endif
                        }
                    @endforeach
                    ]
                @endif
            @endif
        });


        // Init MonthPicker Plugin and Link to Calendar
        Picker.monthpicker({
            prevText: '<i class="fa fa-chevron-left"></i>',
            nextText: '<i class="fa fa-chevron-right"></i>',
            showButtonPanel: false,
            onSelect: function(selectedDate) {
                var formatted = moment(selectedDate, 'MM/YYYY').format('MM/DD/YYYY');
                Calendar.fullCalendar('gotoDate', formatted)
            }
        });

        //        DATERANGE
        $("#daterangepicker").daterangepicker(
                {
                    "locale": {
                        "fromLabel": "Inicio",
                        "toLabel": "Fin"
                    }
                }
        );

        $("#comision").multiselect();



    </script>
    <!-- END: PAGE SCRIPTS -->
@endsection