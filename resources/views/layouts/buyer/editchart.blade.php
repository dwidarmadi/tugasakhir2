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
                <div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt nav-icon"></i> {{ __('Keluar') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>rm>
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

                                @foreach ($products as $dm)
                                <form action={{route('chart.update',$dm->id)}} method="post">
                                    @csrf
                                    @method('PUT')
                                <div class="row">
                                        <div class="col-6">
                                            <img src="{{ asset('photos/'.$dm->photo) }}"
                                                class="product-image" alt="Product Image">
                                            <div style="display: flex; flex-wrap:wrap;">

                                                {{-- @foreach ($productphotos as $productphoto) --}}

                                                {{-- <div class="product-image-thumbs">
                                                    <div class="product-image-thumb active"><img
                                                            src="{{ asset('photos/'.$dm->photo) }}"
                                                            alt="Product Image">
                                                    </div>
                                                </div> --}}

                                                {{-- @endforeach --}}
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <h3 class="my-3">{{$dm->name}}</h3>
                                            <h4>Deskripsi</h4>
                                            <p>{{$dm->description}}</p>
                                            <hr>
                                            <input type="hidden" name="idproduct" value="{{ $dm->id }}" />
                                            <input type="hidden" name="nameproduct" value="{{ $dm->name }}" />
                                            <input type="hidden" name="hargaproduct" value="{{ $dm->price }}" />
                                            <input type="hidden" name="qty" value="{{ $dm->qty }}" />
                                            <h4>Stok</h4>
                                            <h5>{{$dm->qty}}</h5>
                                            <h4>Jumlah Belanja</h4>
                                            <input type="number" class="col-2" name="jumlahbelanja" value="0" min="1"
                                                max="{{$dm->qty}}" required><br>
                                            <h4>Status</h4>
                                            @if ($dm->status === 'Tidak Tersedia')
                                            <span class="badge badge-danger">{{$dm->status}}</span>
                                            @else
                                            <span class="badge badge-success">{{$dm->status}}</span>
                                            @endif

                                            <div class="bg-gray py-2 px-3 mt-4">
                                                <h2 class="mb-0">Rp.{{number_format($dm->price)}}</h2>
                                            </div>

                                            <div class="mt-4">
                                                {{-- <a href={{route('chart.store',$dm->id)}}>
                                                <div class="btn btn-primary btn-lg btn-flat">
                                                    <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                                    Keranjang
                                                </div>
                                                </a> --}}
                                                <button type="submit" class="btn btn-primary btn-lg btn-flat"> <i
                                                        class="fas fa-cart-plus fa-lg mr-2"></i>Edit</button>
                                                <div class="btn btn-success btn-lg btn-flat">
                                                    <i class="fas fa-cash-register fa-lg mr-2"></i>
                                                    Bayar Sekarang
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    @endforeach

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

@section('scriptPlace')
<script>
    $(document).ready(function () {
        $('.product-image-thumb').on('click', function () {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>
@endsection
