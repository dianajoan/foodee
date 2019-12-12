<!-- Left Panel -->
    <aside id="left-panel" class="left-panel" style="background-color: #D2B48C;">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="menu-title">Admin</li><!-- /.menu-title -->

                    <li class="active">
                        <a href="{{ route('admin') }}"><i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <li>
                        <a href="{{ route('roles.index') }}"> <i class="menu-icon fa fa-th"></i></i>Roles</a>
                    </li>

                    <li>
                        <a href="{{ route('users.index') }}"> <i class="menu-icon fa fa-users"></i></i>Users</a>
                    </li>

                    <li>
                        <a href="{{ route('permissions.index') }}"> <i class="menu-icon fa fa-briefcase"></i></i>Permissions</a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-cogs"></i></i>Settings</a>
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->