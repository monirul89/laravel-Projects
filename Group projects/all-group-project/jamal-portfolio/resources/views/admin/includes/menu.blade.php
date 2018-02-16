<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{route('home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li><a href="{{route('about-me')}}"><i class="fa fa-history fa-fw"></i>About</a></li>
            <li>
                <a href="#"><i class="fa fa-server fa-fw"></i>Services<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('add-service')}}">Add Service</a>
                    </li>
                    <li>
                        <a href="{{route('manage-service')}}">Manage Service</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-tasks fa-fw"></i>Projects<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('add-project')}}">Add Project</a>
                    </li>
                    <li>
                        <a href="{{route('manage-project')}}">Manage Project</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>