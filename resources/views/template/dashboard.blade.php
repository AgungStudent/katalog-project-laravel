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
                <div class="dropdown">
                    <button class="btn btn-link text-dark dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-expanded="false">
                       {{auth()->user()->name}}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item text-center" href="{{route('update-password.page')}}">Reset Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item">
                            <form action="{{route('logout')}}" method="post" class="text-center">
                                @csrf
                                <button type="submit"
                                    class="btn btn-link text-bold text-center text-danger">Logout</button>
                            </form>
                        </a>
                    </div>
                </div>
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
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>
                                    Kontak
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.index') }}"
                                class="nav-link {{ Request::is('dashboard/client') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-link"></i>
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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
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
