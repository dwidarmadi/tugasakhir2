@extends('layouts.tamplate')

@section('sidebar')
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt nav-icon"></i> {{ __('Keluar') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
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
                <h1><i class="fas fa-shopping-cart nav-icon"></i><span class="ml-3"></span>Konfirmasi Pembayaran</h1>
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
                            <h3 class="card-title">Konfirmasi Bayar Sekarang</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="ml-3 mt-3">
                            @php
                            $jumlahkeranjang = count($data_cart);
                            $datawal=0;
                            $grandtotal=0;
                            @endphp

                            @for ($i = 0; $i < $jumlahkeranjang; $i++) @php $subtotal=$data_cart[$i]->price *
                                $data_cart[$i]->qty;
                                $grandtotal=$datawal+=$subtotal;

                                @endphp
                                @endfor
                            <h5>Total Belanja : Rp. {{number_format($grandtotal)}}</h5>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action={{ route('buyer.checkout.store') }} method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="phone">No. Telepon</label>
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="Nomor Telepon" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Pesanan</label>
                                    <input type="text" class="form-control" id="alamat"
                                        placeholder="Alamat Pesanan" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="payment">Transfer via</label>
                                    <div class="form-group">
                                        <select class="custom-select rounded-0" id="payment" name="payment">
                                            <option>BCA</option>
                                            <option>BNI</option>
                                            <option>Mandiri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="shipper">Pilih Jasa Pengiriman</label>
                                    <div class="form-group">
                                        <select class="custom-select rounded-0" id="shipper" name="shipper">
                                            <option>J&T</option>
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
