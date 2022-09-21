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
                <h1><i class="fas fa-shopping-basket nav-icon"></i><span class="ml-3"></span>Keranjang Belanja</h1>
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
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Daftar Keranjang Belanja
                            <a href="/buyer/dashboard" class="btn btn-primary ml-3">
                                <i class="fas fa-shopping-basket nav-icon"></i>
                                Lanjut Belanja</a>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="vertical-align: middle;">No</th>
                                    <th style="vertical-align: middle;">Produk</th>
                                    <th style="vertical-align: middle;">Nama Produk</th>
                                    <th style="vertical-align: middle;">Jumlah</th>
                                    <th style="vertical-align: middle;">Harga</th>
                                    <th style="vertical-align: middle;">Harga Total</th>
                                    <th style="vertical-align: middle;">Aksi</th>
                            </thead>
                            @foreach ($products as $dm => $pr)
                            <tbody>
                                <tr>
                                    <td>{{ ++$dm }}</td>
                                    <td>
                                        <img src="{{ asset('photos/' . $pr->fotoproduk) }}" alt="" width="150px"
                                            height="150px">
                                    </td>
                                    <td>{{ $pr->name }}</td>
                                    <td>{{ $pr->qty }}</td>
                                    <td>Rp. {{ number_format($pr->price) }}</td>
                                    <td>Rp. {{ number_format($pr->price * $pr->qty) }}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('chart.edit', $pr->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#idprodukchart" data-id="{{ $pr->id }}">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="modal fade" id="idprodukchart">
                            <div class="modal-dialog">
                                <div class="modal-content bg-default">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Produk</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-content">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex;">
                            <h5>Total Belanja :&nbsp; </h5>
                            @php
                            $jumlahkeranjang = count($products);
                            $datawal=0;
                            $grandtotal=0;
                            @endphp

                            @for ($i = 0; $i < $jumlahkeranjang; $i++) @php $subtotal=$products[$i]->price *
                                $products[$i]->qty;
                                $grandtotal=$datawal+=$subtotal;

                                @endphp
                                @endfor

                                <h5>Rp. {{number_format($grandtotal)}}</h5>
                        </div>
                        <div class="pt-2">
                            <a href="/checkout" class="btn btn-primary">Bayar</a>
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
<!-- /.content-wrapper -->
@endsection

@section('scriptPlace')
<!-- Init Modal -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#idprodukchart").on('show.bs.modal', function (e) {
            var idProductChart = $(e.relatedTarget).data('id');
            $.get('/showdetailchart/' + idProductChart, function (data) {
                $(".modal-content").html(data);
            });
        });
    });
</script>
<!-- End -->
@endsection
