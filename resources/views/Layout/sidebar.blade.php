<a href="index3.html" class="brand-link">
    <img src="{{ asset('assets/deltasoft-logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Deltasoft System</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Reception Panel
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./index.html" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Patient Registration's</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./index2.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Patient Record</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Search Panel
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/layout/top-nav.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Daily Collection Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Patient Collection Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/boxed.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Collection x-Ray</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Collection Sonography</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reference X-Ray</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-topnav.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Reference Sonography</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/layout/fixed-footer.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Summary Report</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        Master Panel
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/UI/general.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Test Name</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/UI/icons.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Test Parameter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('department.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Show Main Department</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('subdept.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Show Sub Department</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User Registration</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('doctor') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Doctor Reference</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('center') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Center Reference</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('department.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Main Department</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('subdept.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Sub Department</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('test.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add New Test</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/UI/ribbons.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Test Parameter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/UI/ribbons.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Help Value</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/UI/ribbons.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Test Rate</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
