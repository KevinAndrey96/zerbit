@include('layouts.sidebar')
        <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-133433427-1');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '327167911228268');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=327167911228268&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->


    <!-- Flatpickr -->
    <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">


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
                    <a href="index.html" class="navbar-brand ">
                        <img class="navbar-brand-icon" src="assets/images/stack-logo-white.svg" width="22" alt="Stack">
                        <span>Stack</span>
                    </a>


                    <form class="search-form d-none d-sm-flex flex" action="index.html">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                        <input type="text" class="form-control" placeholder="Search">
                    </form>


                    <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="material-icons">help_outline</i> Get Help
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a href="pricing.html" class="btn btn-outline-warning">
                                <i class="material-icons">star</i> PRO
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                               data-caret="false">
                                <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                            </a>
                            <div id="notifications_menu"
                                 class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                <div class="dropdown-item d-flex align-items-center py-2">
                                    <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                    <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                </div>
                                <div class="navbar-notifications-menu__content" data-simplebar>
                                    <div class="py-2">

                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                         alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title bg-purple rounded-circle"><i
                                                                    class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title rounded-circle">JD</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                <div>Hey, how are you? What about our next meeting</div>
                                                <small class="text-muted">2 minutes ago</small>
                                            </div>
                                        </div>

                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                         alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title bg-purple rounded-circle"><i
                                                                    class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title rounded-circle">JD</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                <div>Hey, how are you? What about our next meeting</div>
                                                <small class="text-muted">2 minutes ago</small>
                                            </div>
                                        </div>

                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                    <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                         alt="Avatar" class="avatar-img rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                <small class="text-muted">1 minute ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title bg-purple rounded-circle"><i
                                                                    class="material-icons icon-16pt">person_add</i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                New user <a href="#">Peter Parker</a> signed up.<br>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-item d-flex">
                                            <div class="mr-3">
                                                <a href="#">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title rounded-circle">JD</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="flex">
                                                <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                <div>Hey, how are you? What about our next meeting</div>
                                                <small class="text-muted">2 minutes ago</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <a href="javascript:void(0);"
                                   class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                            </div>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                        <li class="nav-item dropdown">
                            <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                               data-caret="false">
                                <img src="assets/images/avatar/demi.png" class="rounded-circle" width="32"
                                     alt="Frontted">
                                <span class="ml-1 d-flex-inline">
                                        <span class="text-light">Adrian D.</span>
                                    </span>
                            </a>
                            <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item-text dropdown-item-text--lh">
                                    <div><strong>Adrian Demian</strong></div>
                                    <div>@adriandemian</div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item active" href="index.html">Dashboard</a>
                                <a class="dropdown-item" href="profile.html">My profile</a>
                                <a class="dropdown-item" href="edit-account.html">Edit account</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.html">Logout</a>
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
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
</div>

<!-- jQuery -->
<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- Simplebar -->
<script src="assets/vendor/simplebar.min.js"></script>

<!-- DOM Factory -->
<script src="assets/vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="assets/vendor/material-design-kit.js"></script>

<!-- App -->
<script src="assets/js/toggle-check-all.js"></script>
<script src="assets/js/check-selected-row.js"></script>
<script src="assets/js/dropdown.js"></script>
<script src="assets/js/sidebar-mini.js"></script>
<script src="assets/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="assets/js/app-settings.js"></script>


<!-- Flatpickr -->
<script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="assets/js/flatpickr.js"></script>

<!-- Global Settings -->
<script src="assets/js/settings.js"></script>

<!-- Chart.js -->
<script src="assets/vendor/Chart.min.js"></script>

<!-- App Charts JS -->
<script src="assets/js/charts.js"></script>

<!-- Chart Samples -->
<script src="assets/js/page.dashboard.js"></script>

<!-- Vector Maps -->
<script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="assets/js/vector-maps.js"></script>

</body>

</html>