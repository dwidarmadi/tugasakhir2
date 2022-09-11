@extends('layouts.tamplate')
<!-- Sidebar Menu -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('AdminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
            alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
    </div>
</div>
<!-- /.sidebar-menu -->
@section('sidebar')
<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cart-arrow-down  nav-icon"></i>
                        <p>Status Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/buyer/chart" class="nav-link">
                        <i class="fas fa-shopping-basket nav-icon"></i>
                        <p>Keranjang Belanja</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-history nav-icon"></i>
                        <p>Histori Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-exclamation-circle nav-icon"></i>
                        <p>Tentang</p>
                    </a>
                </li>
                <div>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt nav-icon"></i> {{ __('Keluar') }}
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
                <h1><i class="fas fa-shopping-cart nav-icon"></i><span class="ml-3"></span>Check Out</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Table input -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Konfirmasi Check Out</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="ml-3 mt-3">
                            <h5>Total Belanja :</h5>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputNama">Nama Pemesan</label>
                                    <input type="email" class="form-control" id="exampleInputNama"
                                        placeholder="Nama Pemesan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNoTelepon">No. Telepon</label>
                                    <input type="text" class="form-control" id="exampleInputNoTelepon"
                                        placeholder="Nomor Telepon">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAlamat">Alamat Pesanan</label>
                                    <input type="email" class="form-control" id="exampleInputAlamat"
                                        placeholder="Alamat Pesanan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTransfer">Transfer via</label>
                                    <div class="form-group">
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>BCA</option>
                                            <option>BNI</option>
                                            <option>Mandiri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPengiriman">Pilih Jasa Pengiriman</label>
                                    <div class="form-group">
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>J&N</option>
                                            <option>JNE</option>
                                            <option>Si Cepat Express</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Proses Pesanan</button>
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
@endsection
