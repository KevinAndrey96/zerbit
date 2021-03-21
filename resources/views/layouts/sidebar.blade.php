@section('sidebar')
    <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                    <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">

                        <span class="flex d-flex flex-column">
                                        <strong>{{{ Auth::user()->name }}}</strong>
                                        <small class="text-muted text-uppercase">{{{Auth::user()->email }}}</small>
                                    </span>
                    </a>

                </div>
                <div class="sidebar-heading sidebar-m-t">Menú</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item active open">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                            <span class="sidebar-menu-text">Administración</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show " id="dashboards_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('patients') }}">
                                    <span class="sidebar-menu-text">Pacientes</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('users') }}">
                                    <span class="sidebar-menu-text">Administradores</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                            <span class="sidebar-menu-text">Formatos de consetimiento</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="apps_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('lab-samples') }}">
                                    <span class="sidebar-menu-text">Muestras de laboratorio</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="#">
                                    <span class="sidebar-menu-text">Terapias físicas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                            <span class="sidebar-menu-text">Historias Clínicas</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="pages_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="companies.html">
                                    <span class="sidebar-menu-text">Ver historias clínicas</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="companies.html">
                                    <span class="sidebar-menu-text">Crear historia clínica</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                            <span class="sidebar-menu-text">Agenda</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="layouts_menu">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="index.html">
                                    <span class="sidebar-menu-text">Ver citas</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fluid-dashboard.html">
                                    <span class="sidebar-menu-text">Crear cita</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
@endsection