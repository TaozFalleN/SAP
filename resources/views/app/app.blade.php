<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('global.app_name') }}</title>

        <!-- Favicon -->
        <!--<link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="{{ asset('plugins/fontawesome/all.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">

        <!-- Google Fonts -->
        <!-- Manrope -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">

        <!-- Open Sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        
        <!-- Blackdashboard CSS -->
        <link type="text/css" href="{{ asset('assets') }}/css/black-dashboard.min.css?v=1.1.1" rel="stylesheet">

        <!-- Estilos plugin full calendar -->
        <link href="{{ asset('custom/css/fullCalendar.css') }}" rel="stylesheet">

        <!-- Estilos plugin datatables -->
        <link href="{{ asset('custom/css/datatables.css') }}" rel="stylesheet">

        <!-- Custom CSS 
        <link href="http://recursos.test/css/estilos-muni.css" rel="stylesheet"> -->

         <!-- Custom CSS -->
         <!-- <link href="https://recursos.losangeles.cl/css/estilos-muni.css" rel="stylesheet"> -->

        <link href="https://recursos.losangeles.cl/css/estilos-muni.css" rel="stylesheet"> 
 
        <style>
            .form-control:focus{
                border-color: #1d8cf8;
            }
        </style>
    </head>
            
    <body class="{{ $perfil->usu_menu_min == 1 ?  'sidebar-mini' : ''}} {{ $perfil->usu_modo_oscuro == 1 ?  '' : 'white-content'}}">
        <div class="wrapper">
            <div class="navbar-minimize-fixed">
                <button class="minimize-sidebar btn btn-link btn-just-icon">
                <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
                <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
                </button>
            </div>
        
            <!-- Menu lateral izquierdo -->
            @include('navbars.menu')
            <div class="main-panel" data="{{ $perfil->usu_color_menu }}">
                <!-- Barra superior de navegacion -->
                @include('navbars.header')

                <div class="content">
                    <!-- Contenido -->
                    @yield('content')
                </div>

                 <!-- Barra inferior de navegacion -->
                 @include('navbars.footer')

            </div>
        </div>

         <!-- Menu lateral derecho con configuraciones de estilo personalizables -->
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title">Color</li>
                    <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">

                    <span class="badge filter badge-info {{ $perfil->usu_color_menu == 'blue' ? 'active' : '' }}" data-color="blue"></span>
                    <!--<span class="badge filter badge-success {{ $perfil->usu_color_menu == 'green' ? 'active' : '' }}" data-color="green"></span>-->
                    <span class="badge filter badge-warning {{ $perfil->usu_color_menu == 'orange' ? 'active' : '' }}" data-color="orange"></span>
                    
                    </div>
                    <div class="clearfix"></div>
                    </a>
                    </li>
                    <li class="header-title">
                    Menú minimizado
                    </li>
                    <li class="adjustments-line">
                        <div class="togglebutton switch-sidebar-mini" disabled>
                        <span class="label-switch">OFF</span>
                        <input id="menu_min_switch" type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="" data-off-label="" {{ $perfil->usu_menu_min == 1 ? 'checked' : '' }}  />
                        <span class="label-switch label-right">ON</span>
                        </div>
                        <div class="togglebutton switch-change-color mt-3">
                        <span class="label-switch">MODO CLARO</span>
                        <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="" data-off-label="" {{ $perfil->usu_modo_oscuro == 1 ? 'checked' : '' }} />
                        <span class="label-switch label-right">MODO OSCURO</span>
                        </div>
                    </li>
                    <li class="button-container mt-4">
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- CORE BLACKDASHBOARD JS -->
        <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <!-- CORE BLACKDASHBOARD -->

        <!-- PLUGINS BLACKDASHBOARD JS -->
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.tablesorter.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>

        <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/fullcalendar/timegrid.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/fullcalendar/interaction.min.js') }}"></script>

        <script src="{{ asset('assets/js/plugins/jquery-jvectormap.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/wizard.js') }}"></script>
        <script src="{{ asset('assets/js/black-dashboard.min.js?v=1.1.1') }}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46172202-12"></script>

        <!-- PLUGINS BLACKDASHBOARD JS -->

        <!-- Clave Unica JS -->
        <script src="{{ asset('custom/js/claveUnica.js') }}" defer></script>
        <!-- Clave Unica JS -->

        <script src="{{ asset('custom/js/PDFObject.js?v='.time()) }}"></script>

       <!-- Cytoscape -->
        <script src="{{ asset('plugins/cytoscape/cytoscape.js') }}"></script>
        <script src="{{ asset('plugins/cytoscape/graphlib.min.js') }}"></script>
        <script src="{{ asset('plugins/cytoscape/dagre.min.js') }}"></script>
        <script src="{{ asset('plugins/cytoscape/cytoscape-dagre.min.js') }}"></script>
        <!-- Cytoscape -->

        <!-- Custom JS -->
        <script src="{{ asset('custom/js/custom.js?v='.time()) }}"></script>
        <!-- Custom JS -->

        <!-- Script menu preferencias -->
        @include('app.script')
        <!-- Script menu preferencias -->

        <!-- Script Sweet Alerts -->
        @include('sweetalert::alert') 
        <!-- Script Sweet Alerts -->
    </body>
</html>
<script>
  $('#loading').css("visibility", "hidden");
</script>