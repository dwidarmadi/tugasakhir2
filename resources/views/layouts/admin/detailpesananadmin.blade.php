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
                    <a href="./index3.html" class="nav-link">
                        <i class="fas fa-info nav-icon"></i>
                        <p>Informasi Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="fas fa-car-alt nav-icon"></i>
                        <p>Pengiriman Hari Ini</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="fas fa-user nav-icon"></i>
                        <p>Data Pengguna</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href={{route('bank.store')}} class="nav-link">
                        <i class="fas fa-money-check-alt nav-icon"></i>
                        <p>Data BANK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href={{route('jasapengiriman.store')}} class="nav-link">
                        <i class="fas fa-business-time nav-icon"></i>
                        <p>Data Jasa Pengiriman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-file-alt nav-icon"></i>
                        <p>Repots</p>
                    </a>
                </li>
                <div>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt nav-icon"></i> {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
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
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="far fas fa-search nav-icon"></i><span class="ml-3"></span>Detail Pesanan</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Informasi Pesanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No Transaksi</th>
                                    <th>Nama Pemesan</th>
                                    <th>Waktu Pesanan</th>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                    <th>Bank</th>
                                    <th>Jasa Pengiriman</th>
                                    <th>Total Pembayaran</th>
                                    <th>Status Produk</th>
                                    <th>Jadwal Pengiriman</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>T001</td>
                                    <td>Putu Dehan</td>
                                    <td>10-05-2022</td>
                                    <td>Kamen Songket Motif Kedis</td>
                                    <td>1</td>
                                    <td>BCA</td>
                                    <td>J&T</td>
                                    <td>Rp. 1.300.000</td>
                                    <td>
                                        <span class="badge badge-success">Diterima</span>
                                        <span class="badge badge-danger">Belum Dibayar</span>
                                        <span class="badge badge-primary">Dalam Proses</span>
                                    </td>
                                    <td>12-05-2022</td>
                                    <td>Jln. Pasekan, Perumahan Tegal Sari, Batubulan Gianyar</td>
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
