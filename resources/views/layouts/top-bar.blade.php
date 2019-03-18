<div class="topbar">
    <nav class="navbar-custom">

        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="hide-phone app-search">
                <form>
                    <input type="text" placeholder="Search..." class="form-control">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </li>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="fi-square-plus noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">
                    <!-- item-->
                    <div class="slimscroll" style="max-height: 230px;">
                        <!-- item-->
                        <a href=" " class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="mdi mdi-clock"></i></div>
                            <p class="notify-details"> 创建工时
                                <small class="text-muted">原子单位</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="mdi mdi-view-module"></i>
                            </div>
                            <p class="notify-details">创建项目
                                <small class="text-muted">最大单位</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="mdi mdi-buffer"></i></div>
                            <p class="notify-details">创建版本
                                <small class="text-muted">组单位</small>
                            </p>
                        </a>

                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);"
                       class="dropdown-item text-center text-primary notify-item notify-all">

                    </a>
                </div>
            </li>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="fi-bell noti-icon"></i>
                    <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>清除全部</small></a> </span>通知
                        </h5>
                    </div>
                    <div class="slimscroll" style="max-height: 230px;">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                <small class="text-muted">3 days ago</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">7 days ago</small>
                            </p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                            <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);"
                       class="dropdown-item text-center text-primary notify-item notify-all">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{Auth::user()->avatar}}" alt="user" class="rounded-circle"> <span
                            class="ml-1"> {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h6 class="text-overflow m-0">欢迎 !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('user.edit',Auth::id())}}" class="dropdown-item notify-item">
                        <i class="fi-head"></i> <span>个人信息</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fi-cog"></i> <span>设置</span>
                    </a>
                    <!-- item-->
                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                        <i class="fi-power"></i> <span>退出</span>
                    </a>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left disable-btn">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <li>
                <div class="page-title-box">

                    @yield('breadcrumb')
                </div>
            </li>

        </ul>

    </nav>

</div>
