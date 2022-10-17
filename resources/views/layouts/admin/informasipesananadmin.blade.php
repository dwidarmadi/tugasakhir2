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
                        <i class="fas fa-info nav-icon"></i>
                        <p>Informasi Pesanan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-car-alt nav-icon"></i>
                        <p>Pengiriman Hari Ini</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
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
                    <a href="#" class="nav-link">
                        <i class="far fa-file-alt nav-icon"></i>
                        <p>Repots</p>
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
                <h1><i class="far fa-lightbulb nav-icon"><span class="ml-3"></span></i>Pesanan Masuk</h1>
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
                        <h3 class="card-title">Pesanan Berlangsung</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Invoice Code</th>
                                    <th>Payment</th>
                                    <th>Pembayaran</th>
                                    <th>Kurir</th>
                                    <th>Total Belanja</th>
                                    <th>Detail Order</th>
                                    <th>Payment</th>
                                </tr>
                            </thead>
                            @foreach ($orders as $ord => $or)
                            <tbody>
                                <tr>
                                    <td>{{$or->invoice_code}}</td>
                                    <td>
                                        <img src="{{ asset('photos/' . $or->payment_img) }}" alt=""
                                                        width="150px" height="150px">
                                    </td>
                                    <td>{{$or->payment}}</td>
                                    <td>{{$or->shipper}}</td>
                                    <td>Rp. {{number_format($or->total)}}</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="#">
                                           List Product
                                        </a>
                                    </td>
                                    <td>
                                        @if ($or->status == "Checking Payment")
                                        <form method="post" action={{ route('admin.payment.check', $or->invoice_code) }}>
                                            @csrf
                                            <input type="hidden" value="a" name="status">
                                            <button type="submit" class="btn btn-sm btn-success">Approved</button>
                                        </form>
                                        <br>
                                        <form method="post" action={{ route('admin.payment.check', $or->invoice_code) }}>
                                            @csrf
                                            <input type="hidden" value="d" name="status">
                                            <button type="submit" class="btn btn-sm btn-danger">Declined</button>
                                        </form>
                                        @elseif ($or->status == "Payment Failed")
                                        <span class="badge badge-danger">Payment Declined</span>
                                        @else
                                        <span class="badge badge-success">Payment Approved</span>
                                        @endif

                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
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
