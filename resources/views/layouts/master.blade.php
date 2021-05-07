@include('layouts.sidebar')
        <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="/assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="/assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/app.rtl.css" rel="stylesheet">

    <link type="text/css" href="/assets/css/signature-pad.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="/assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="/assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" />
    <link type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">

    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=327167911228268&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Flatpickr -->
    <link type="text/css" href="/assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="/assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="/assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="layout-default">


<div class="preloader"></div>

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->

    <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
        <div class="mdk-header__content">

            <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                <div class="container-fluid p-0">

                    <!-- Navbar toggler -->

                    <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button"
                            data-toggle="sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <!-- Navbar Brand -->
                    <a href="/" class="navbar-brand ">
                        <img class="navbar-brand-icon" src="/assets/images/logo.png" width="70" alt="Stack">
                        <span>Zerbit Portal</span>
                    </a>


                    <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                        <li class="nav-item dropdown">
                            <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                               data-caret="false">
                                <img src="/assets/images/user-icon.png" class="rounded-circle" width="32"
                                     alt="Frontted">
                                <span class="ml-1 d-flex-inline">
                                        <span class="text-light"></span>
                                    </span>
                            </a>
                            <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item-text dropdown-item-text--lh">
                                    <div><strong>Opciones</strong></div>
                                </div>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="/signatures/{{auth()->user()->id}}">Ver/Editar Firma</a>
                                <a class="dropdown-item" href="{{route('change')}}">Cambiar contraseña</a>
                                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <div class="mdk-header-layout__content">
        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
            <div class="mdk-drawer-layout__content page">
                <div class="container-fluid page__heading-container">
                    <div class="page__heading d-flex align-items-center">
                        <div class="flex">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                                </ol>
                            </nav>
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
            <!-- // END drawer-layout__content -->
            @yield('sidebar')
        </div>
        <!-- // END drawer-layout -->
    </div>

</div>
<!-- // END header-layout -->

<!-- App Settings FAB -->
<div id="app-settings">
    <app-settings layout-active="default" :layout-location="{
      'default': '/',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
</div>

<!-- jQuery -->
<script src="/assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/vendor/popper.min.js"></script>
<script src="/assets/vendor/bootstrap.min.js"></script>

<!-- Simplebar -->
<script src="/assets/vendor/simplebar.min.js"></script>

<!-- DOM Factory -->
<script src="/assets/vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="/assets/vendor/material-design-kit.js"></script>

<!-- App -->
<script src="/assets/js/toggle-check-all.js"></script>
<script src="/assets/js/check-selected-row.js"></script>
<script src="/assets/js/dropdown.js"></script>
<script src="/assets/js/sidebar-mini.js"></script>
<script src="/assets/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="/assets/js/app-settings.js"></script>


<!-- Flatpickr -->
<script src="/assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="/assets/js/flatpickr.js"></script>

<!-- Global Settings -->
<script src="/assets/js/settings.js"></script>


<!-- Vector Maps -->
<script src="/assets/vendor/jqvmap/jquery.vmap.min.js"></script>
<script src="/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="/assets/js/vector-maps.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous"></script>



</body>

</html>