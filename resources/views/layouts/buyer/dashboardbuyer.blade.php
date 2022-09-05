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
                        <i class="fas fa-cart-arrow-down  nav-icon"></i>
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
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container">
        <div class="col-sm-12">
            <h1 class="text-center"> KAIN TENUN SONGKET</h1>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid col-md-11   ">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        @foreach ($products as $product)
                        @csrf
                        <div class="d-flex col-md-4">
                            <div class="card">
                                <div class="text-center card-body d-flex flex-column justify-content-between px-0">
                                    <img src="{{ asset('storage/photos/'.$product->image) }}" class="card-img-top"
                                        alt="..." style="height: 50%; width=auto">
                                    <div>

                                        <h5>{{$product->name}}</h5>
                                        <p class="card-text"><i class="fas fa-tag"></i><span class="ml-3"></span>Rp.
                                            {{number_format($product->price)}}</p>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-success btn-sm"
                                                href="{{route('product.show',$product->id)}}">
                                                <i class="fas fa-folder">
                                                </i>
                                                Details
                                            </a>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        <!-- /.card -->
        <!-- /.col -->
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->
@endsection
