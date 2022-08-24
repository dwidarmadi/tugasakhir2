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
                    <h1><i class="fas fa-plus"><span class="ml-3"></span></i>Tambah Produk</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Table input -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Input Data Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="col" method="post" action="/product" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Produk</label>
                                    <input type="text" name="name" maxlength="255" class="form-control" required
                                        placeholder="Nama Produk">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                    <input type="text" name="description" maxlength="255" class="form-control" required
                                        placeholder="Deskripsi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jumlah</label>
                                    <input type="text" name="qty" maxlength="20" class="form-control" required
                                        placeholder="Jumlah">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <div class="form-group">
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="">Pilih Satu</option>
                                            <option value="Tersedia">Tersedia</option>
                                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Harga</label></label>
                                    <input type="text" name="price" maxlength="20" class="form-control" required
                                        placeholder="Harga">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="photo" name="photo">
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.table input -->
    <!-- /.content-wrapper -->
</section>
@endsection
