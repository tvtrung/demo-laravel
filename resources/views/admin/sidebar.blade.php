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
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{isActive('admin.profile.index','active open')}}">
                        <a href="{{route('admin.profile.index')}}" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">Profile</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{areActive(array('admin.admins.index','admin.admins.create'),'active open')}} {{ setActive('*/admins*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Admins</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{isActive('admin.admins.index','active open')}}">
                        <a href="{{route('admin.admins.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">List</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{isActive('admin.admins.create','active open')}}">
                        <a href="{{route('admin.admins.create')}}" class="nav-link ">
                            <i class="fa fa-file-text-o"></i>
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{areActive(array('admin.users.index','admin.users.create'),'active open')}} {{ setActive('*/users*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Users</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{isActive('admin.users.index','active open')}}">
                        <a href="{{route('admin.users.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">List</span>
                            <span class="badge badge-success"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{isActive('admin.users.create','active open')}}">
                        <a href="{{route('admin.users.create')}}" class="nav-link ">
                            <i class="fa fa-file-text-o"></i>
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{areActive(array('admin.configs.info','admin.configs.basic'),'active open')}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-cog"></i>
                    <span class="title">Configs</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{isActive('admin.configs.info','active open')}}">
                        <a href="{{route('admin.configs.info')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Infomation</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{isActive('admin.configs.basic','active open')}}">
                        <a href="{{route('admin.configs.basic')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Basic</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{ setActive('*/images*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-file-image-o"></i>
                    <span class="title">Images</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ setActive('*/images/slider*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'slider'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Slider</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/images/partner*', 'active open') }}">
                        <a href="{{route('admin.images.index',['type'=>'partner'])}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Partner</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start {{ setActive('*/news*', 'active open') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-pencil-square-o"></i>
                    <span class="title">News</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ setActive('*/news/cat*', 'active open') }}">
                        <a href="{{route('admin.news.cat.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">Categories</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ setActive('*/news/post*', 'active open') }}">
                        <a href="{{route('admin.news.post.index')}}" class="nav-link ">
                            <i class="fa fa-list"></i>
                            <span class="title">All News</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>