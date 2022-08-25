<x-backend-master-head />

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand nav-blue navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                {{-- USER --}}
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="../../dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2"
                            alt="User Image"> --}}
                        <span class="d-none d-md-inline">{{auth()->user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu dropdown-menu-right">
                        <!-- User image -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-block text-bold btn-outline-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('/home')}}" class="brand-link">
                <img src="{{ asset('assets/img/sidomulyo2.png') }}" alt="logo perusahaan"
                    class="brand-image elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">&nbsp;</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">Menu</li>
                        <li class="nav-item">
                            <a href="{{ route('product.index') }}"
                                class="nav-link {{ Request::is('dashboard/product') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    Produk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('finishing-machine.index') }}"
                                class="nav-link {{ Request::is('dashboard/finishing-machine') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cash-register"></i>
                                <p>
                                    Finishing Machine
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}"
                                class="nav-link {{ Request::is('dashboard/contact') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    Kontak
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.index') }}"
                                class="nav-link {{ Request::is('dashboard/client') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                   Klien Kita
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        {{-- CONTENT --}}
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('header')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                {{-- <li class="breadcrumb-item active">Legacy User Menu</li> --}}
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                @yield('content')
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; <script>
                    document.write((new Date()).getFullYear())
                </script> <a>Sidomulyo Advertising
                </a></strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <x-backend-master-footer />
