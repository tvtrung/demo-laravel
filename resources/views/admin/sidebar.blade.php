<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler"> </div>
            </li>
            <li class="nav-item start {{areActive(array('admin.dashboard','admin.profile.index'),'active open')}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{isActive('admin.dashboard','active open')}}">
                        <a href="{{route('admin.dashboard')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{isActive('admin.profile.index','active open')}}">
                        <a href="{{route('admin.profile.index')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">Profile</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{areActive(array('admin.admins.index','admin.admins.create'),'active open')}} {{ setActive('admint/admins*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Admins</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{isActive('admin.admins.index','active open')}}">
                        <a href="{{route('admin.admins.index')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">List</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{isActive('admin.admins.create','active open')}}">
                        <a href="{{route('admin.admins.create')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">Create</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-item start {{areActive(array('admin.users.index','admin.users.create'),'active open')}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Users</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{isActive('admin.users.index','active open')}}">
                        <a href="{{route('admin.users.index')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">List</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{isActive('admin.users.create','active open')}}">
                        <a href="{{route('admin.users.create')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">Create</span>
                            <span class="badge badge-success">1</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>