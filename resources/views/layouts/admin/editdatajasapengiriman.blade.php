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
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pesanan Masuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pengiriman Hari Ini</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Pengguna</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data BANK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Jasa Pengiriman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Repots</p>
                    </a>
                </li>
                <li>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Log Out</button>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Jasa Pengiriman</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Table input -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Data Jasa Pengiriman</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama Jasa Pengiriman">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Telepon</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
<!-- /.content-wrapper -->
<!-- /.table input -->
@endsection
