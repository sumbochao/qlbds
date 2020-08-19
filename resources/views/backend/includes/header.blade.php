<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            {{-- <a href="{{ route('frontend.index') }}" class="logo">
                 <!-- mini logo for sidebar mini 50x50 pixels -->
                 <span class="logo-mini">
            {{ substr(app_name(), 0, 1) }}
         </span>
             </a>--}}
            <span class="logo-mini">
           {{ substr(app_name(), 0, 1) }}
        </span>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark"
                       href="https://www.wrappixel.com/demos/admin-templates/elegant-admin/horizontal/"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="{{ access()->user()->picture }}" alt="user" class="img-circle" width="30"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class=""><img src="{{ access()->user()->picture }}" alt="user" class="img-circle"
                                               width="60"></div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">{{ access()->user()->fullname }}</h4>
                                <p class=" m-b-0">{{ access()->user()->email }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{!! route('admin.profile.edit') !!}"><i
                                    class="ti-user m-r-5 m-l-5"></i> Edit Profile</a>
                        <a class="dropdown-item" href="{!! route('admin.access.user.change-password') !!}"><i
                                    class="ti-wallet m-r-5 m-l-5"></i> Change Password</a>
                        <div class="dropdown-divider"></div>
                        {{--  <a class="dropdown-item" href="javascript:void(0)"><i
                                      class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>--}}
                        <a href="{!! route('frontend.auth.logout') !!}" class="btn btn-danger btn-flat">
                            <i class="fa fa-sign-out"></i>
                            {{ trans('navs.general.logout') }}
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->