    @extends('template')
    @section('css')
        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/daterange/daterangepicker.css">
    @endsection
    @section('content')

                <div class="admin-form theme-info mw700 center-block" id="login1">

                    <div class="panel panel-info mt10 br-n">
                        @if(isset($comision))
                            {!! Form::model($comision,['route' => ['comisionesupdate',$comision->id], 'method' => 'put','id' => 'account2']) !!}
                        @else
                            {!! Form::open(['route' => 'comisionesstore', 'method' => 'POST','id' => 'account2']) !!}
                        @endif
                            <div class="panel-body p25 bg-light">
                                <div class="section-divider mt10 mb40">
                                    <span>Complete los siguientes campos</span>
                                </div>
                                <!-- .section-divider -->

                                <div class="section row">
                                    <div class="section">
                                            {!!Form::label('daterange','Fecha', array('class' => 'control-label'))!!}
                                        <div class="form-group field prepend-icon">
                                            @if(isset($comision))
                                                {!!Form::text('daterange',$comision->Dates(),array('class' => 'form-control pull-right active gui-input','id' => 'daterangepicker1','placeholder' => 'Ingrese fecha de llegada y partida'))!!}
                                            @else
                                                {!!Form::text('daterange',"",array('class' => 'form-control pull-right active gui-input','id' => 'daterangepicker1','placeholder' => 'Ingrese fecha de llegada y partida'))!!}
                                            @endif
                                                <label for="daterange" class="field-icon"><i class="fa fa-calendar"></i>
                                                </label>
                                        </div>



                                        {!!Form::label('localidad','Localidad', array('class' => 'control-label'))!!}
                                        <div class="form-group" role="group">
                                            <div class="form-group field prepend-icon w75p pull-left">
                                                @if(isset($comision))
                                                    {!!Form::text('address',$comision->Address(),array('class' => 'form-control col-xs-9 pull-left active gui-input','id' => 'address','placeholder' => 'Ingrese localidad'))!!}
                                                @else
                                                    {!!Form::text('address',"",array('class' => 'form-control col-xs-9 pull-left active gui-input','id' => 'address','placeholder' => 'Ingrese localidad'))!!}
                                                @endif
                                                <label for="address" class="field-icon"><i class="glyphicon glyphicon-map-marker"></i>
                                                </label>
                                            </div>
                                                <input id="geocoding_form" type="button" class="btn btn-default light w25p pull-left" value="Buscar">

                                        </div>
                                        <div class="row">

                                            <div class="col-xs-12">
                                                <div id="map1" class="map"></div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- end section -->
                                </div>



                            </div>

                                <!-- end .form-body section -->
                                <div class="panel-footer clearfix">
                                    {!! Form::submit('Crear',array('class' => 'button btn-primary pull-right')) !!}
                                </div>
                                <!-- end .form-footer section -->
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>


    @endsection
    @section('js')
            <!-- Page Plugins -->
                <script type="text/javascript" src="vendor/plugins/daterange/moment.min.js"></script>
                <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
                <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>
                <script type="text/javascript" src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
                <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
                <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>
        <script>
                $('#address').keypress(function(e) {
                    if (e.which == 13) {
                        $("#geocoding_form").click();
                        return false;
                    }
                });

            var map = new GMaps({
                div: '#map1',
                lat: -34.603738900,
                lng: -58.381570400
            });
                map.setZoom(12);

            var input = /** @type {!HTMLInputElement} */(
                    document.getElementById('address'));

            if($('#address').val() != ""){
                new GMaps.geocode({
                    address: $('#address').val().trim(),
                    callback: function(results, status) {
                        if (status == 'OK') {
                            var latlng = results[0].geometry.location;
                            map.setCenter(latlng.lat(), latlng.lng());
                            map.removeMarkers();
                            map.addMarker({
                                lat: latlng.lat(),
                                lng: latlng.lng()
                            });
                            map.setZoom(12);
                            $('#address').val(results[0].formatted_address);
                        }
                    }
                });
            }else{

                navigator.geolocation.getCurrentPosition(function(pos){
                    var latlng = pos.coords;

                    map = new GMaps({
                        div: '#map1',
                        lat: latlng.latitude,
                        lng: latlng.longitude
                    });
                    map.setZoom(12);
                    map.setCenter(latlng.latitude, latlng.longitude);

                    map.removeMarkers();
                    map.addMarker({
                        lat: latlng.latitude,
                        lng: latlng.longitude
                    });

    //                var infowindow = new google.maps.InfoWindow();
                });
            }

            //add search bar to map
            $('#geocoding_form').on('click',function(e) {
                e.preventDefault();
                new GMaps.geocode({
                    address: $('#address').val().trim(),
                    callback: function(results, status) {
                        if (status == 'OK') {
                            var latlng = results[0].geometry.location;
                            map.setZoom(12);
                            map.setCenter(latlng.lat(), latlng.lng());
                            map.removeMarkers();
                            map.addMarker({
                                lat: latlng.lat(),
                                lng: latlng.lng()
                            });
                            $('#address').val(results[0].formatted_address);
                        }
                    }
                });
            });

            if ($('#map_canvas1').length) {
                $('#map_canvas1').gmap({
                    'center': '57.7973333,12.0502107',
                    'zoom': 12,
                    'disableDefaultUI': true,
                    'callback': function() {
                        var self = this;
                        self.addMarker({
                            'position': this.get('map').getCenter()
                        }).click(function() {
                            self.openInfoWindow({
                                'content': 'Hello World!'
                            }, this);
                        });
                    }
                });
            }

            var autocomplete = new google.maps.places.Autocomplete(input,{types: ['geocode']});
            autocomplete.bindTo('bounds', map);

            autocomplete.addListener('place_changed', function() {
                //                infowindow.close();
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("No se encontró el lugar.");
                    return;
                }

                $('#address').val(autocomplete.getPlace().formatted_address);

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(12);  // Why 17? Because it looks good.
                }
                map.removeMarkers();
                map.addMarker({
                    lat: place.geometry.location.lat(),
                    lng: place.geometry.location.lng()
                });
            });

                // Init daterange plugin
                $('#daterangepicker1').daterangepicker({
                    "autoApply": true,
                });


        </script>

    @endsection