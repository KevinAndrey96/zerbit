@section('sidebar')
    <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                    <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                                    <span class="avatar mr-3">
                                        <img src="assets/images/avatar/demi.png" alt="avatar" class="avatar-img rounded-circle">
                                    </span>
                        <span class="flex d-flex flex-column">
                                        <strong>Adrian Demian</strong>
                                        <small class="text-muted text-uppercase">Account Manager</small>
                                    </span>
                    </a>
                    <div class="dropdown ml-auto">
                        <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
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
                    </div>
                </div>
                <div class="sidebar-heading sidebar-m-t">Menu</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item active open">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                            <span class="sidebar-menu-text">Dashboards</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show " id="dashboards_menu">
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="index.html">
                                    <span class="sidebar-menu-text">Default</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="dashboard-quick-access.html">
                                    <span class="sidebar-menu-text">Quick Access</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="staff.html">
                                    <span class="sidebar-menu-text">CRM/Staff</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="analytics.html">
                                    <span class="sidebar-menu-text">E-commerce</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                            <span class="sidebar-menu-text">Apps</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse" id="apps_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="app-trello.html">
                                    <span class="sidebar-menu-text">Trello</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="app-projects.html">
                                    <span class="sidebar-menu-text">Projects</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="app-fullcalendar.html">
                                    <span class="sidebar-menu-text">Event Calendar</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="app-chat.html">
                                    <span class="sidebar-menu-text">Chat</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="app-email.html">
                                    <span class="sidebar-menu-text">Email</span>
                                    <span class="badge badge-primary ml-auto">NEW</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item ">
                                <a class="sidebar-menu-button" data-toggle="collapse" href="#course_menu">
                                    <span class="sidebar-menu-text">Education</span>
                                    <span class="ml-auto d-flex align-items-center">
                                                    <span class="sidebar-menu-toggle-icon"></span>
                                                </span>
                                </a>
                                <ul class="sidebar-submenu collapse " id="course_menu">
                                    <li class="sidebar-menu-item ">
                                        <a class="sidebar-menu-button" href="app-course.html">
                                            <span class="sidebar-menu-text">Course</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item ">
                                        <a class="sidebar-menu-button" href="app-lesson.html">
                                            <span class="sidebar-menu-text">Lesson</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
@endsection