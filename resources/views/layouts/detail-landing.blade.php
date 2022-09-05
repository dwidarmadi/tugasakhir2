<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TENUN SONGKET SIDEMEN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md bg-dark navbar-light navbar-white">
            <div class="container">
                <a href="../../index3.html" class="navbar-brand">
                    <img src="{{ asset('AdminLTE/') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light text-white">TENUN SONGKET</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link text-white">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Contact</a>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-auto">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link text-white"><i
                                    class="fas fa-shopping-basket nav-icon"></i><span class="ml-3"></span>Keranjang
                                Belanja</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Masuk</a>
                        </li>
                    </ul>
                    <!--Full Screen -->
                    <div class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </div>
                </div>


            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="col-sm-12">
                        <h1 class="text-center m-0"> KAIN TENUN SONGKET</h1>
                    </div><!-- /.col -->
                    <!-- /.col -->
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid col-md-8">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="container">

                                    <div class="row">
                                        @csrf

                                        @foreach ($products as $dm)
                                            <div class="col-12 col-sm-6">
                                                <div class="col-12">
                                                    <img src="{{ asset('storage/photos/' . $dm->image) }}"
                                                        class="product-image" alt="Product Image">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <h3 class="my-3">{{ $dm->name }}</h3>
                                                <h4>Deskripsi</h4>
                                                <p>{{ $dm->description }}</p>
                                                <hr>
                                                <h4>Stok</h4>
                                                <h5>{{ $dm->qty }}</h5>
                                                <h4>Status</h4>

                                                @if ($dm->status === 'Tidak Tersedia')
                                                    <span class="badge badge-danger">{{ $dm->status }}</span>
                                                @else
                                                    <span class="badge badge-success">{{ $dm->status }}</span>
                                                @endif

                                                <div class="bg-gray py-2 px-3 mt-4">
                                                    <h2 class="mb-0">Rp.{{ number_format($dm->price) }}</h2>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="btn btn-primary btn-lg btn-flat">
                                                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                                        Keranjang
                                                    </div>
                                                    <div class="btn btn-success btn-lg btn-flat">
                                                        <i class="fas fa-cash-register fa-lg mr-2"></i>
                                                        Bayar Sekarang
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">KamenTenunSongket.com</a></strong>
        </footer>
        <!-- /.footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/') }}/dist/js/adminlte.min.js"></script>

</body>

</html>
