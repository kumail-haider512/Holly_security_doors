<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('admin_theme') }}/assets/img/sidebar-3.jpg">
    <div class="logo">
        <a href="{{ route('home') }}" target="_blank" class="simple-text logo-mini"><img src="{{ asset('icon.png') }}" width="25px" alt=""></a>
        <a href="{{ route('home') }}" target="_blank" class="simple-text logo-normal">TestHub</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('default.png') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>Admin <b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item @routeis('admin.category.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#category">
                    <i class="material-icons">groups</i><p> category<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.category.*') show @endrouteis" id="category">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.category.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.category.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Category List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.category.add') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.category.add') }}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add Category </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.subcategory.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#subcategory">
                    <i class="material-icons">groups</i><p> SubCategory<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.subcategory.*') show @endrouteis" id="subcategory">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.subcategory.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.subcategory.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> SubCategory List </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.subcategory.add') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.subcategory.add') }}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add SubCategory </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:;" onclick="document.getElementById('logout-form').submit()">
                    <form id="logout-form" class="d-none" method="post" action="{{ route('logout') }}">@csrf</form>
                    <i class="material-icons">logout</i>
                    <p> Logout </p>
                </a>
            </li>
        </ul>
    </div>
</div>
