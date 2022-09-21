<?php
    use Illuminate\Support\Facades\Auth;
?>
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
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background: #003840;">
            <div class="container">
                <a href="/" class="navbar-brand">
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
                            <a href="/tentang" class="nav-link text-white">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a href="/carabelanja" class="nav-link text-white">Cara Belanja</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Daftar Sebagai Penjual</a>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-auto">
                        {{-- <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div> --}}
                    </form>


                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/login" class="nav-link text-white"><i
                                    class="fas fa-shopping-basket nav-icon"></i><span class="ml-3"></span>Keranjang
                                Belanja</a>
                        </li>
                        @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                <p style="color:#fff !importaant;">Keluar</p>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        @else

                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-white">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link text-white">Masuk</a>
                        </li>
                        @endif
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
                        <h1 class="text-center m-0">KAIN TENUN SONGKET</h1>
                    </div><!-- /.col -->
                    <!-- /.col -->
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid col-10">
                    <div class="">
                        <div class="card">
                            @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            <div class="card-header">
                                <h3 class="card-title"><b>Cara Belanja</b></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="container">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>1.</th>
                                                <td>Lakukan proses pendaftaran dengan klik tombol <b>Daftar</b> untuk pembeli yang belum mempunyai akun.</td>
                                            </tr>
                                            <tr>
                                                <th>2.</th>
                                                <td>Bagi pembeli yang sudah mempunyai akun silakan masuk ke sistem penjualan Kain Tenun Songket dengan klik tombol <b>Masuk</b>.</td>
                                            </tr>
                                            <tr>
                                                <th>3.</th>
                                                <td>Pilihlah produk yang ingin dibeli.</td>
                                            </tr>
                                            <tr>
                                                <th>4.</th>
                                                <td>Produk akan masuk kedalam keranjang belanja.</td>
                                            </tr>
                                            <tr>
                                                <th>5.</th>
                                                <td>Klik bayar untuk membeli produk.</td>
                                            </tr>
                                            <tr>
                                                <th>6.</th>
                                                <td>Isilah data yang diperlukan saat check out, kemudian klik tombol <b>Proses Pesanan</b>.</td>
                                            </tr>
                                            <tr>
                                                <th>7.</th>
                                                <td>Transfer ke bank yang sudah dipilih.</td>
                                            </tr>
                                            <tr>
                                                <th>8.</th>
                                                <td>Upload bukti pembayaran anda.</td>
                                            </tr>
                                        </thead>
                                    </table>
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

        <!-- Main Footer -->
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
