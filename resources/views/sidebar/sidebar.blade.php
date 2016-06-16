 <!-- Start: Header -->
    <header class="navbar navbar-fixed-top bg-info">
        <div class="navbar-branding">
            <a class="navbar-brand" href="#"> <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w150 mt15"></a>
            <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
            <ul class="nav navbar-nav pull-right hidden">
                <li>
                    <a href="#" class="sidebar-menu-toggle">
                        <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                    </a>
                </li>
            </ul>
        </div>

        @if(!Auth::user()->hasRole('admin'))
            <ul class="nav navbar-nav navbar-left pr15">
                <li class="pt20 pb20">
                    <i class="fa fa-map-marker fs18"></i><span> Capital Federal, Buenos Aires.</span>
                </li>
            </ul>
        @endif

        @if(Auth::user()->hasRole('admin'))
            <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="fa fa-user fs20"></span>
                </a>
                <ul class="dropdown-menu m-left" role="menu">
                    <li>
                        <a href="{!! route('usersindex') !!}">
                            <span class="glyphicons glyphicons-list pr20 text-info"></span> Listado </a>
                    </li>
                    <li>
                        <a href="{!! route('userscreate') !!}">
                            <span class="glyphicons glyphicons-user_add pr20 text-info-dark"></span> Nuevo usuario </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="fa fa-key fs20"></span>
                </a>
                <ul class="dropdown-menu m-left" role="menu">
                    <li>
                        <a href="{!! route('rolesindex') !!}">
                            <span class="imoon imoon-users pr5 text-primary"></span> Roles </a>
                    </li>
                    <li>
                        <a href="{!! route('rolescreate') !!}">
                            <span class="glyphicon glyphicon-plus pr5 text-primary-dark"></span> Nuevo rol </a>
                    </li>
                    <li class="divider mv5"></li>
                    <li>
                        <a href="{!! route('permisosindex') !!}">
                            <span class="glyphicons glyphicons-rotation_lock pr5 text-warning"></span> Permisos </a>
                    </li>
                    <li>
                        <a href="{!! route('permisoscreate') !!}">
                            <span class="glyphicon glyphicon-plus pr5 text-warning-dark"></span> Nuevo permiso </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicons glyphicons-train fs20"></span>
                </a>
                <ul class="dropdown-menu m-left" role="menu">
                    <li>
                        <a href="{!! route('comisionesindex') !!}">
                            <span class="glyphicons glyphicons-list pr20 text-info"></span> Comisiones </a>
                    </li>
                    <li>
                        <a href="{!! route('comisionescreate') !!}">
                            <span class="glyphicon glyphicon-plus pr5 text-info-dark"></span> Nueva comisión </a>
                    </li>
                </ul>
            </li>

        </ul>
        @endif

        <ul class="nav navbar-nav navbar-right">
            <li class="ph10 pv20"> <i class="fa fa-circle text-tp fs8"></i></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="assets/img/avatars/5.jpg" alt="avatar" class="mw30 br64 mr15">
                    <span class="text-uppercase">{!! Auth::user()->user!!}</span>
                    <span class="caret caret-tp"></span>
                </a>
                <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                    <li class="bg-light br-b br-light p8">
                            <span class="pull-right w100p inner100p">
                                <select id="user-role">
                                    <optgroup label="Logged in As:">
                                        <option value="1-1">Client</option>
                                        <option value="1-2">Editor</option>
                                        <option value="1-3" selected="selected">Admin</option>
                                    </optgroup>
                                </select>
                            </span>
                        <div class="clearfix"></div>

                    </li>
                    {{--<li class="of-h">--}}
                        {{--<a href="#" class="fw600 p12 animated animated-short fadeInUp">--}}
                            {{--<span class="fa fa-envelope pr5"></span> Messages--}}
                            {{--<span class="pull-right lh20 h-20 label label-warning label-sm">2</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="br-t of-h">--}}
                        {{--<a href="#" class="fw600 p12 animated animated-short fadeInUp">--}}
                            {{--<span class="fa fa-user pr5"></span> Friends--}}
                            {{--<span class="pull-right lh20 h-20 label label-warning label-sm">6</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="br-t of-h">--}}
                        {{--<a href="#" class="fw600 p12 animated animated-short fadeInDown">--}}
                            {{--<span class="fa fa-gear pr5"></span> Account Settings </a>--}}
                    {{--</li>--}}
                    <li class="br-t of-h">
                        <a href="{!! route('auth.logout') !!}" class="fw600 p12 animated animated-short fadeInDown">
                            <span class="fa fa-power-off pr5"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">
        <div class="nano-content">


            <!-- sidebar menu -->
            <ul class="nav sidebar-menu">
                <li>
                    <a href="{!! route('agendaindex') !!}">
                        <span class="fa fa-calendar"></span>
                        <span class="sidebar-title">Calendario</span>
                            {{--<span class="sidebar-title-tray">--}}
                                {{--<span class="label label-xs bg-primary">New</span>--}}
                            {{--</span>--}}
                    </a>
                </li>

                <li class="sidebar-label pt15">Pacientes</li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="glyphicons glyphicons-notes_2"></span>
                        <span class="sidebar-title">Admición</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{!! route('pacientescreate')!!}">
                                <span class="fa fa-caret-right text-primary"></span> Ingreso </a>
                        </li>
                    </ul>
                </li>


                <!-- sidebar resources -->
                <li class="sidebar-label pt20">Medicos</li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-plus-square"></span>
                        <span class="sidebar-title">Especialidades</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{!! route('medicaindex') !!}">
                                <span class="glyphicons glyphicons-warning_sign"></span> Clínica médica </a>
                        </li>
                        <li>
                            <a href="{!! route('psicologiaindex') !!}">
                                <span class="glyphicons glyphicons-dislikes"></span> Psicólogía </a>
                        </li>
                        <li>
                            <a href="{!! route('cardiologiaindex') !!}">
                                <span class="glyphicons glyphicons-macbook"></span> Cardiología </a>
                        </li>
                        <li>
                            <a href="{!! route('otorrinolaringologiaindex')!!}">
                                <span class="glyphicons glyphicons-check"></span> Otorrinolaringología </a>
                        </li>
                        <li>
                            <a href="{!! route('neurologiaindex')!!}">
                                <span class="glyphicons glyphicons-adjust_alt"></span> Neurología </a>
                        </li>
                        <li>
                            <a href="{!! route('oftalmologiaindex')!!}">
                                <span class="glyphicons glyphicons-podium"></span> Oftalmología </a>
                        </li>
                        <li>
                            <a href="{!! route('odontologiaindex') !!}">
                                <span class="glyphicons glyphicons-fabric"></span> Odontología </a>
                        </li>
                        <li>
                            <a href="{!! route('traumatologiaindex')!!}">
                                <span class="glyphicons glyphicons-more_items"></span> Traumatología </a>
                        </li>
                        <li>
                            <a href="{!! route('ginecologiaindex')!!} ">
                                <span class="glyphicons glyphicons-rabbit"></span> Ginecología </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle menu-open" href="#">
                        <span class="glyphicons glyphicons-hdd"></span>
                        <span class="sidebar-title">Form Elements</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li class="active">
                            <a href="#">
                                <span class="glyphicons glyphicons-pen"></span> Inputs </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-text_height"></span> Typography </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-book_open"></span> Editors </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-tree_conifer"></span> Treeview </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-sort"></span> Nestable </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-cloud-upload"></span> Uploaders </a>
                        </li>
                        <li class="hidden">
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicons glyphicons-more_items"></span> Editors
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="#">
                                        <span class="glyphicons glyphicons-flash"></span> Ckeditor </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicons glyphicons-flash"></span> Markdown </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicons glyphicons-flash"></span> Summernote </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="glyphicons glyphicons-flash"></span> X-Editable </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-crown"></span> Notifications </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-retweet"></span> Content Sliders </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicons glyphicons-show_big_thumbnails"></span> Grid </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="glyphicons glyphicons-stopwatch"></span>
                        <span class="sidebar-title">Plugins</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicons glyphicons-globe"></span> Maps
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="#">Admin Maps</a>
                                </li>
                                <li>
                                    <a href="#">Basic Maps</a>
                                </li>
                                <li>
                                    <a href="#">Vector Maps</a>
                                </li>
                                <li>
                                    <a href="#">Full Map</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicons glyphicons-charts"></span> Charts
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="#">Highcharts</a>
                                </li>
                                <li>
                                    <a href="#">D3 Charts</a>
                                </li>
                                <li>
                                    <a href="#">Flot Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicons glyphicons-table"></span> Tables
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="#"> Basic </a>
                                </li>
                                <li>
                                    <a href="#"> Formatted Rows </a>
                                </li>
                                <li>
                                    <a href="#"> DataTables </a>
                                </li>
                                <li>
                                    <a href="#"> Pricing Tables </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="glyphicons glyphicons-more_items"></span>
                        <span class="sidebar-title">Pages</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicons glyphicons-cogwheels"></span> Utility
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="#"> Login </a>
                                </li>
                                <li>
                                    <a href="#"> Register </a>
                                </li>
                                <li>
                                    <a href="#"> Screenlock </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"> Forgotten Password </a>
                                </li>
                                <li>
                                    <a href="#"> 404 Error </a>
                                </li>
                                <li>
                                    <a href="#"> 500 Error </a>
                                </li>
                                <li>
                                    <a href="#"> 404 Error Alt </a>
                                </li>
                                <li>
                                    <a href="#"> 500 Error Alt </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicons glyphicons-imac"></span> Basic
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="#"> Calendar </a>
                                </li>
                                <li>
                                    <a href="#"> Profile </a>
                                </li>
                                <li>
                                    <a href="#"> Timeline Split </a>
                                </li>
                                <li>
                                    <a href="#"> Timeline Single </a>
                                </li>
                                <li>
                                    <a href="#"> FAQ Page </a>
                                </li>
                                <li>
                                    <a href="#"> Messages </a>
                                </li>
                                <li>
                                    <a href="#"> Messages Alt </a>
                                </li>
                                <li>
                                    <a href="#"> Gallery </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="accordion-toggle" href="#">
                                <span class="glyphicons glyphicons-usd"></span> Misc
                                <span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav">
                                <li>
                                    <a href="#"> Printable Invoice </a>
                                </li>
                                <li>
                                    <a href="#"> Blank </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- sidebar bullets -->
                <li class="sidebar-label pt20">Projects</li>
                <li class="sidebar-proj">
                    <a href="#projectOne">
                        <span class="fa fa-dot-circle-o text-primary"></span>
                        <span class="sidebar-title">Website Redesign</span>
                    </a>
                </li>
                <li class="sidebar-proj">
                    <a href="#projectTwo">
                        <span class="fa fa-dot-circle-o text-info"></span>
                        <span class="sidebar-title">Ecommerce Panel</span>
                    </a>
                </li>
                <li class="sidebar-proj">
                    <a href="#projectTwo">
                        <span class="fa fa-dot-circle-o text-danger"></span>
                        <span class="sidebar-title">Adobe Mockup</span>
                    </a>
                </li>
                <li class="sidebar-proj">
                    <a href="#projectThree">
                        <span class="fa fa-dot-circle-o text-warning"></span>
                        <span class="sidebar-title">SSD Upgrades</span>
                    </a>
                </li>

                <!-- sidebar progress bars -->
                <li class="sidebar-label pt25 pb10">User Stats</li>
                <li class="sidebar-stat mb10">
                    <a href="#projectOne" class="fs11">
                        <span class="fa fa-inbox text-info"></span>
                        <span class="sidebar-title text-muted">Email Storage</span>
                        <span class="pull-right mr20 text-muted">35%</span>
                        <div class="progress progress-bar-xs ml20 mr20">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                <span class="sr-only">35% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="sidebar-stat mb10">
                    <a href="#projectOne" class="fs11">
                        <span class="fa fa-dropbox text-warning"></span>
                        <span class="sidebar-title text-muted">Bandwidth</span>
                        <span class="pull-right mr20 text-muted">58%</span>
                        <div class="progress progress-bar-xs ml20 mr20">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                                <span class="sr-only">58% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="sidebar-toggle-mini">
                <a href="#">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
        </div>
    </aside>
    <!-- End: Sidebar -->
