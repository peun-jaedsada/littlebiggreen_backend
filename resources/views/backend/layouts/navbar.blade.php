<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        {{-- <li class="d-none d-sm-block">
            <form class="app-search">
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-right">
                            <a href="" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="slimscroll noti-scroll">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                        <div class="notify-icon">
                            <img src="{{url('assets/images/users/user-1.jpg')}}" class="img-fluid rounded-circle" alt="" /> </div>
                        <p class="notify-details">Cristina Pride</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Hi, How are you? What about our next meeting</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">1 min ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon">
                            <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                        <p class="notify-details">Karen Robinson</p>
                        <p class="text-muted mb-0 user-msg">
                            <small>Wow ! this admin looks good and awesome design</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-warning">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">New user registered.
                            <small class="text-muted">5 hours ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">4 days ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-secondary">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">Carlos Crouch liked
                            <b>Admin</b>
                            <small class="text-muted">13 days ago</small>
                        </p>
                    </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    View all
                    <i class="fi-arrow-right"></i>
                </a>

            </div>
        </li> --}}

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                {{-- <img src="{{url('assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle"> --}}
                <span class="pro-user-name ml-1">
                    {{ strtoupper(\Auth::user()->name) }} <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Lock Screen</span>
                </a> --}}

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{ route('auth.logout') }}" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center">
            <span class="logo-lg">
                <h3 style="color:white; margin-top: 20px;">Backend</h3>
            </span>
            <span class="logo-sm">
                <img src="{{url('assets/images/logo-sm.png')}}" alt="" height="24">
            </span>
        </a>
    </div>

    {{-- <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li class="dropdown d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                Create New
                <i class="mdi mdi-chevron-down"></i> 
            </a>
            <div class="dropdown-menu">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-briefcase mr-1"></i>
                    <span>New Projects</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-user mr-1"></i>
                    <span>Create Users</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-bar-chart-line- mr-1"></i>
                    <span>Revenue Report</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-settings mr-1"></i>
                    <span>Settings</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">
                    <i class="fe-headphones mr-1"></i>
                    <span>Help & Support</span>
                </a>

            </div>
        </li>

        <li class="dropdown dropdown-mega d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                Mega Menu
                <i class="mdi mdi-chevron-down"></i> 
            </a>
            <div class="dropdown-menu dropdown-megamenu">
                <div class="row">
                    <div class="col-sm-8">
            
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="text-dark mt-0">UI Components</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);">Widgets</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Nestable List</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Range Sliders</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Masonry Items</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Sweet Alerts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Treeview Page</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Tour Page</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="text-dark mt-0">Applications</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);">eCommerce Pages</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">CRM Pages</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Email</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Team Contacts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Task Board</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Email Templates</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h5 class="text-dark mt-0">Extra Pages</h5>
                                <ul class="list-unstyled megamenu-list">
                                    <li>
                                        <a href="javascript:void(0);">Left Sidebar with User</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Menu Collapsed</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Small Left Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">New Header Style</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Search Result</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Gallery Pages</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center mt-3">
                            <h3 class="text-dark">Special Discount Sale!</h3>
                            <h4>Save up to 70% off.</h4>
                            <button class="btn btn-primary btn-rounded mt-3">Download Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </li>
    </ul> --}}
</div>