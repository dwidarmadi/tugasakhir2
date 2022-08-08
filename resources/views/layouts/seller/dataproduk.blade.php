@extends('layouts.tamplate')

@section('sidebar')
<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                        <i class="fab fa-product-hunt nav-icon"></i>
                        <p>Produk Saya</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="far fa-plus-square nav-icon"></i>
                        <p>Tambah Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                        <i class="far fa-lightbulb nav-icon"></i>
                        <p>Pesanan Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="fas fa-car-alt nav-icon"></i>
                        <p>Pesanan Dikirim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="fas fa-info nav-icon"></i>
                        <p>Informasi Pesanan</p>
                    </a>
                </li>
                <div>
                    <li class="nav-item">
                        <a href="./index3.html" class="nav-link">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </div>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<section class="content">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-tachometer-alt"><span class="ml-3"></span></i>Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    !-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Pengiriman Hari Ini</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No Transaksi</th>
                                        <th>Nama Pesanan</th>
                                        <th>Waktu Pesanan</th>
                                        <th>Bank</th>
                                        <th>Jasa Pengiriman</th>
                                        <th>Total Pembayaran</th>
                                        <th>Status Produk</th>
                                        <th>Jadwal Pengiriman</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>T001</td>
                                        <td>Putu Dehan</td>
                                        <td>10-05-2022</td>
                                        <td>BCA</td>
                                        <td>J&T</td>
                                        <td>Rp. 1.300.000</td>
                                        <td>
                                            <span class="badge badge-primary">Dikirim</span>
                                            <span class="badge badge-success">Diterima</span>
                                        </td>
                                        <td>12-05-2022</td>
                                        <td>Jln. Pasekan, Perumahan Tegal Sari, Batubulan Gianyar</td>
                                        <td>
                                            <a class="btn btn-danger btn-sm mt-2" href="#">
                                                <i class="fas fa-trash"> </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
    <!-- /.content-wrapper -->
    @endsection
