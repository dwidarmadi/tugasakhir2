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
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fab fa-product-hunt nav-icon"></i><span class="ml-3"></span>Detail Produk</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="col-12">
                                        <img src="{{ asset('AdminLTE/') }}/dist/img/nyuntik.png" class="product-image"
                                            alt="Product Image">
                                    </div>
                                    <div class="col-12 product-image-thumbs">
                                        <div class="product-image-thumb active"><img
                                                src="{{ asset('AdminLTE/') }}/dist/img/prod-1.jpg" alt="Product Image">
                                        </div>
                                        <div class="product-image-thumb"><img
                                                src="{{ asset('AdminLTE/') }}/dist/img/prod-2.jpg" alt="Product Image">
                                        </div>
                                        <div class="product-image-thumb"><img
                                                src="{{ asset('AdminLTE/') }}/dist/img/prod-3.jpg" alt="Product Image">
                                        </div>
                                        <div class="product-image-thumb"><img
                                                src="{{ asset('AdminLTE/') }}/dist/img/prod-4.jpg" alt="Product Image">
                                        </div>
                                        <div class="product-image-thumb"><img
                                                src="{{ asset('AdminLTE/') }}/dist/img/prod-5.jpg" alt="Product Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <h3 class="my-3">Tenun Songket Motif Bulan</h3>
                                    <h4>Deskripsi</h4>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                        stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu
                                        banh mi, qui irure terr.</p>
                                    <hr>
                                    <h4>Stok</h4>
                                    <h5>4</h5>
                                    <h4>Status</h4>
                                    <span class="badge badge-success">Tersedia</span>
                                    <div class="bg-gray py-2 px-3 mt-4">
                                        <h2 class="mb-0">
                                            Rp. 1.200.000
                                        </h2>
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
                            </div>
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
</div>
<!-- /.content-wrapper -->
@endsection
