@extends('layouts.tamplate')

@section('sidebar')
    <!-- Sidebar Menu -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('AdminLTE') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                                                                    with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href={{ route('product.store') }} class="nav-link">
                            <i class="fab fa-product-hunt nav-icon"></i>
                            <p>Produk Saya</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href={{ route('product.create') }} class="nav-link">
                            <i class="far fa-plus-square nav-icon"></i>
                            <p>Tambah Produk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('order.index') }}" class="nav-link">
                            <i class="far fa-lightbulb nav-icon"></i>
                            <p>Pesanan Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-car-alt nav-icon"></i>
                            <p>Pesanan Dikirim</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-info nav-icon"></i>
                            <p>Informasi Pesanan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>Keluar</p>
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
                    <h1><i class="far fa-lightbulb nav-icon"></i><span class="ml-3"></span>Pesanan Masuk</h1>
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
                            <h3 class="card-title">Daftar Pesanan Masuk</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Invoice Code</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Pembayaran</th>
                                        <th>Kurir</th>
                                        <th>Total Belanja</th>
                                        <th>Detail Order</th>
                                        <th>Status Pesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @if ($orders != null)
                                        <td>{{$orders->invoice_code}}</td>
                                        <td>{{$orders->alamat}}</td>
                                        <td>{{$orders->payment}}</td>
                                        <td>{{$orders->shipper}}</td>
                                        <td>Rp. {{number_format($orders->total)}}</td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="#">
                                               List Product
                                            </a>
                                        </td>
                                        <td>
                                            @if ($orders->status == 'On Process')
                                            <a href="{{ route('seller.shipping', $orders->invoice_code) }}"><span class="badge badge-success">On Process</span></a>
                                            @elseif ($orders->status == 'Shipping')
                                            <span class="badge badge-success">Shipping</span>
                                            @elseif ($orders->status == 'Delivered')
                                            <span class="badge badge-success">Delivered</span>
                                            @elseif ($orders->status == 'Received')
                                            <span class="badge badge-success">Received</span>
                                            @elseif ($orders->status == 'Checking on Shipping')
                                            <span class="badge badge-warning">Checking on Shipping</span>
                                            @endif
                                        </td>
                                        @endif
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
