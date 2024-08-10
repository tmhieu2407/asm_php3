<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets') }}/images/OIV.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p> {{ auth()->user()->name }} </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('admin.index') }}">
                    <i class="fa fa-dashboard"></i> <span>DashBoard</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green">Hot</small>
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-diamond"></i> <span>Quản lý Loại Tin</span>
                    <span class="label label-warning pull-right">NEW</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('category.index') }}"><i class="fa fa-cube"></i> Danh Sách Loại Tin</a></li>
                    <li><a href="{{ route('category.create') }}"><i class="fa fa-edit"></i> Thêm Mới Loại Tin</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Quản Lý Bài Viết</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('product.index') }}"><i class="fa fa-cube"></i> Danh Sách Tin</a></li>
                    <li><a href="{{ route('product.create') }}"><i class="fa fa-edit"></i> Thêm Mới Tin</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-globe"></i> <span> Vai Trò Người Dùng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-cube"></i> Danh sách Vai Trò Người Dùng </a></li>
                    <li><a href=""><i class="fa fa-edit"></i> Thêm mới Vai Trò Người Dùng</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-globe"></i> <span>Quản Lý Người Dùng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('user.index') }}"><i class="fa fa-cube"></i> Danh Sách Người Dùng</a></li>
                    <li><a href="{{ route('user.create') }}"><i class="fa fa-edit"></i> Thêm mới Người Dùng</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa fa-book"></i> <span>Quản Lý Liên Hệ</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('contact.index') }}"><i class="fa fa-cube"></i> Danh Sách Liên Hệ</a></li>

                    </ul>

            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
