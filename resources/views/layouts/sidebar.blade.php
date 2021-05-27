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
                <div class="sidebar-heading sidebar-m-t">Menú {{auth()->user()->role}}</div>
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
                            @if(auth()->user()->role == "admin")
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('users') }}">
                                    <span class="sidebar-menu-text">Administradores</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @if(auth()->user()->role == "admin" || auth()->user()->role == "laboratorio")
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                            <span class="sidebar-menu-text">Formatos de consentimiento</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="apps_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('lab-samples-create') }}">
                                    <span class="sidebar-menu-text">Crear formato de consentimiento</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('lab-samples') }}">
                                    <span class="sidebar-menu-text">Ver consentimientos informados</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->role == "admin" || auth()->user()->role == "terapeuta")
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                            <span class="sidebar-menu-text">Historias Clínicas</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="pages_menu" >
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('physical-therapies-create') }}">
                                    <span class="sidebar-menu-text">Crear consentimiento terapia fisica</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('physical-therapies') }}">
                                    <span class="sidebar-menu-text">Ver consentimientos terapia fisica</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('clinical-histories-create') }}">
                                    <span class="sidebar-menu-text">Crear historia clínica</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="{{ route('clinical-histories') }}">
                                    <span class="sidebar-menu-text">Ver historias clínicas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->role == "admin" || auth()->user()->role == "terapeuta")
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                            <span class="sidebar-menu-text">Agenda</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="layouts_menu">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="{{ route('appointments') }}">
                                    <span class="sidebar-menu-text">Ver citas</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#account">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">face</i>
                            <span class="sidebar-menu-text">Mi cuenta</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="account">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="/signatures/{{auth()->user()->id}}">
                                    <span class="sidebar-menu-text">Ver/editar cuenta</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="{{route('change')}}">
                                    <span class="sidebar-menu-text">Cambiar contraseña</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="{{ route('logout') }}">
                                    <span class="sidebar-menu-text">Cerrar sesión</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection