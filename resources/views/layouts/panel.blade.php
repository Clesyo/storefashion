<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>  @yield('title')   </title>
    <meta name="description" content="Store Fashion - Sua loja virtual">
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7COswald:300,400,500,600,700" rel="stylesheet">

    <link href="{{ asset('panel/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('panel/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('panel/libs/toastr/build/toastr.min.css')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('panel/css/bootstrap.min.css')}}"  rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('panel/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('panel/css/app.min.css')}}"  rel="stylesheet" type="text/css" />
    <script src="{{ asset('panel/libs/jquery/jquery.min.js')}}"></script>
</head>
<body data-sidebar="dark">

     <!-- Begin page -->
     <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ url('home', []) }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('panel/images/logo.svg')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('panel/images/logo-dark.png')}}" alt="" height="17">
                            </span>
                        </a>

                        <a href="{{ url('home', []) }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('panel/images/logo-light.svg')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('panel/images/logo-light.png')}}" alt="" height="19">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>

                    <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                        <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Mega Menu
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">
                                <div class="col-sm-8">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="font-size-14 mt-0">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14 mt-0">Applications</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Ecommerce</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Email</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Projects</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tasks</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Contacts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-4">
                                            <h5 class="font-size-14 mt-0">Extra Pages</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Light Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Compact Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Horizontal layout</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Maintenance</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Coming Soon</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Timeline</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">FAQs</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="font-size-14 mt-0">UI Components</h5>
                                            <ul class="list-unstyled megamenu-list">
                                                <li>
                                                    <a href="javascript:void(0);">Lightbox</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Range Slider</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Sweet Alert</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Rating</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Charts</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-5">
                                            <div>
                                                <img src="{{asset('panel/images/megamenu-img.png')}}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="" src="{{asset('panel/images/flags/us.jpg')}}" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('panel/images/flags/spain.jp')}}g" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('panel/images/flags/germany.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('panel/images/flags/italy.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset('panel/images/flags/russia.jpg')}}" alt="user-image" class="mr-1" height="12"> <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>



                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            <span class="badge badge-danger badge-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notificações </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> Ver todos</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your order is placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> Ver mais..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{asset('panel/images/users/avatar-1.jpg')}}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ url('perfil', []) }}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Perfil</a>
                            <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            <form action="{{route('logout')}}" id="form-logout" method="post">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="bx bx-cog bx-spin"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div class="vertical-menu">
            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                                <span>Dashboards</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="index.html">Default</a></li>
                                <li><a href="dashboard-saas.html">Saas</a></li>
                                <li><a href="dashboard-crypto.html">Crypto</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-layout"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Width</a></li>
                                <li><a href="layouts-preloader.html">Preloader</a></li>
                                <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Loja Virtual</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-order-bool-descending-variant"></i>
                                <span>Pedidos</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="layouts-horizontal.html">Realizados</a></li>
                                <li><a href="layouts-horizontal.html">Pendentes</a></li>
                                <li><a href="layouts-horizontal.html">Cancelados</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-calendar"></i>
                                <span>Produtos</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('produtos', []) }}">Novo produto</a></li>
                                <li><a href="layouts-horizontal.html">Montar vitrine</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{ url('produtos', []) }}" class=" waves-effect">
                                <i class="bx bx-archive-in"></i>
                                <span>Produtos</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-save"></i>
                                <span>Cadastro</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ url('categorias', []) }}">Categorias</a></li>
                                <li><a href="{{ url('cores', []) }}">Cores</a></li>
                                <li><a href="{{ url('marcas', []) }}">Marcas</a></li>
                            </ul>
                        </li>



                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>

        <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->



                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Store Fashion.
                            </div>
                            {{-- <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Sua loja virtual
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
     </div>
     <!-- Right Sidebar -->
     <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Configurações</h5>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            {{-- <h6 class="text-center mb-0">Choose Layouts</h6> --}}

            <div class="p-4">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Gerenciamento de acessos</li>
                    <li>
                        <a href="{{ url('settings/role', []) }}" class=" waves-effect">
                            <i class="bx bx-paperclip"></i>
                            <span>Funções</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('settings/permission', []) }}" class=" waves-effect">
                            <i class="bx bx-shield-alt-2"></i>
                            <span>Permissões</span>
                        </a>
                    </li>
                    <li class="menu-title">Controle de Usuários</li>
                    <li>
                        <a href="calendar.html" class=" waves-effect">
                            <i class="bx bx-user"></i>
                            <span>Usuários</span>
                        </a>
                    </li>
                </ul>
                {{-- <div class="mb-2">
                    <img src="{{asset('panel/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{asset('panel/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="{{asset('panel/css/bootstrap-dark.min.css')}}" data-appStyle="assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="{{asset('panel/css/app-rtl.min.css')}}" />
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div> --}}


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('panel/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('panel/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('panel/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('panel/libs/node-waves/waves.min.js')}}"></script>



    <!-- apexcharts -->
    {{-- <script src="{{ asset('panel/libs/apexcharts/apexcharts.min.js')}}"></script> --}}

    {{-- <script src="{{ asset('panel/js/pages/dashboard.init.js')}}"></script> --}}



    @yield('js')
   <!-- toastr plugin -->
   <script src="{{ asset('panel/libs/toastr/build/toastr.min.js')}}"></script>

   <!-- toastr init -->
   <script src="{{ asset('panel/js/pages/toastr.init.js')}}"></script>

    <!-- form advanced init -->
    <script src="{{ asset('panel/js/pages/form-advanced.init.js')}}"></script>
    <!-- App js -->
    <script src="{{ asset('panel/js/app.js')}}"></script>


    @yield('scripts')

</body>
</html>
