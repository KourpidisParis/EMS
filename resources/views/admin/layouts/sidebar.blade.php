
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Departments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('departments.index')}}">Show Departments</a>
                                    <a class="nav-link" href="{{route('departments.create')}}">Create Departments</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Roles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{route('roles.index')}}" >
                                        Show Roles
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>

                                    <a class="nav-link collapsed" href="{{route('roles.create')}}">
                                        Create Role
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>




                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUsers" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{route('users.index')}}" >
                                        Show Users
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>

                                    <a class="nav-link collapsed" href="{{route('users.create')}}">
                                        Create User
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePermissions" aria-expanded="false" aria-controls="collapsePermissions">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Permissions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePermissions" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{route('permissions.index')}}" >
                                        Show Permissions
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>

                                    <a class="nav-link collapsed" href="{{route('permissions.create')}}">
                                        Create Permission
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLeaves" aria-expanded="false" aria-controls="collapseLeaves">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Leaves
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLeaves" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{route('leaves.index')}}" >
                                        Show Leaves
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>

                                    <a class="nav-link collapsed" href="{{route('leaves.create')}}">
                                        Create Leave
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseNotices" aria-expanded="false" aria-controls="collapseNotices">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Notices
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseNotices" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{route('notices.index')}}" >
                                        Show Notices
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>

                                    <a class="nav-link collapsed" href="{{route('notices.create')}}">
                                        Create Notice
                                        <div class="sb-sidenav-collapse-arrow"></div>
                                    </a>
                                </nav>
                            </div>


                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                             <i class="fas fa-sign-out-alt"></i>
 Logout

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
                </nav>
            </div>