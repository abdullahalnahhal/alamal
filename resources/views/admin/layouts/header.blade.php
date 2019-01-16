<!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light" dir="{{getStyle(App::getLocale())['dir']}}">
                <!-- Logo -->
                <div class="navbar-header pull-{{getStyle(App::getLocale())['rev-full']}}">
                    <a class="navbar-brand" href="{{lRoute('admin.index')}}">
                        <!-- Logo icon -->
                        <b><img src="{{asset('images/logo.png')}}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="{{asset('images/logo-text.png')}}" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse ">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-language"></i></a>
                            <div class="dropdown-menu dropdown-menu-{{getStyle(App::getLocale())['rev-full']}} animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="{{route('admin.index',['locale'=>'en'])}}"><span data-letters='E'>English</span></a></li>
                                    <li><a href="{{route('admin.index',['locale'=>'ar'])}}"><span data-letters='A'>Arabic</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset("images/users/5.jpg")}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-{{getStyle(App::getLocale())['rev-full']}} animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="{{lRoute('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
