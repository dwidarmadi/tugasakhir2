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
                        <i class="fas fa-cart-arrow-down nav-icon"></i>
                        <p>Status Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="fas fa-shopping-basket nav-icon"></i>
                        <p>Keranjang Belanja</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="fas fa-history nav-icon"></i>
                        <p>Histori Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="fas fa-exclamation-circle nav-icon"></i>
                        <p>Tentang</p>
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
                <h1><i class="fas fa-cart-arrow-down nav-icon"></i><span class="ml-3">Status Pesanan</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pesanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No Transaksi</th>
                                    <th>Dipesan</th>
                                    <th>Alamat</th>
                                    <th>Bank</th>
                                    <th>Kurir</th>
                                    <th>Harga Total</th>
                                    <th>Status Pembayaran</th>
                                    <th>Jadwal Pengiriman</th>
                                    <th>Status Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>T001</td>
                                    <td>15-04-2022</td>
                                    <td>Jl. Pasekan No.2 Batubulan, Gianyar</td>
                                    <td>BCA</td>
                                    <td>JNE</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>
                                        <span class="badge badge-danger">Belum Dibayar</span>
                                        <span class="badge badge-primary">Dalam Proses</span>
                                    </td>
                                    <td>17-05-2022</td>
                                    <td>
                                        <span class="badge badge-success">Diterima</span>
                                        <span class="badge badge-danger">Belum Dibayar</span>
                                        <span class="badge badge-primary">Dalam Proses</span>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-upload"></i><span class="ml-2"></span> Bukti Pembayaran</a>
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
@endsection
