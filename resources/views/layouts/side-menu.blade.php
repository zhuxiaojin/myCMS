<!-- 侧边栏 -->

<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                            <span>
                                <img src="{{asset('assets/images/logo.png')}}" alt="" height="22">
                            </span>
                <i>
                    <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="28">
                </i>
            </a>
        </div>
        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="{{Auth::user()->avatar}}" alt="user-img" title="Mat Helme"
                     class="rounded-circle img-fluid">
            </div>
            <h5><a href="#">{{Auth::user()->name}}</a></h5>
            <p class="text-muted">管理员</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="{{route('index.index')}}">
                        <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span>
                        <span> 首页 </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="dripicons-user-group"></i><span> 用户 </span><span
                                class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('user.index')}}">用户管理</a></li>
                        <li><a href="{{route('role.index')}}">角色管理</a></li>
                        <li><a href=" {{route('permission.index')}}">权限管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-bar-graph"></i><span> 统计 </span> </a>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> 内容管理 </span> <span
                                class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('article.index',Auth::user())}}">文章管理</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-cog"></i><span> 设置 </span> <span
                                class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('user.edit',Auth::user())}}">个人设置</a></li>
                        <li><a href=" #">跟踪设置</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-database"></i><span> 数据 </span> <span
                                class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href=" #">数据库备份</a></li>
                        <li><a href=" #">数据项管理</a></li>
                    </ul>
                </li>


            </ul>

        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>