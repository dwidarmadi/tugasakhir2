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
            <div class="text-center">
                <h1>PRODUCT KAIN TENUN SONGKET</h1>
            </div>
    </div><!-- /.container-fluid -->
</section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid col-md-12">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card card-primary mx-auto">
                                <div class="row pt-3">
                                    <div class="card mx-auto" style="width: 16rem;">
                                        <img src="{{ asset('AdminLTE/') }}/dist/img/nyuntik.png" class="card-img-top"
                                            alt="...">
                                        <div class="text-center card-body">
                                            <h5>Tenun Songket Motif Bulan</h5>
                                            <p class="card-text"><i class="fas fa-tag"></i><span class="ml-3"></span>
                                                Rp. 1.500.000</p>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-success btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Details
                                                </a>
                                            </td>
                                        </div>
                                    </div>
                                    <div class="card mx-auto" style="width: 16rem;">
                                        <img src="{{ asset('AdminLTE/') }}/dist/img/nyuntik.png" class="card-img-top"
                                            alt="...">
                                        <div class="text-center card-body">
                                            <h5>Tenun Songket Motif Bulan</h5>
                                            <p class="card-text"><i class="fas fa-tag"></i><span class="ml-3"></span>
                                                Rp. 1.500.000</p>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-success btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Details
                                                </a>
                                            </td>
                                        </div>
                                    </div>
                                    <div class="card mx-auto " style="width: 16rem;">
                                        <img src="{{ asset('AdminLTE/') }}/dist/img/nyuntik.png" class="card-img-top"
                                            alt="...">
                                        <div class="text-center card-body">
                                            <h5>Tenun Songket Motif Bulan</h5>
                                            <p class="card-text"><i class="fas fa-tag"></i><span class="ml-3"></span>
                                                Rp. 1.500.000</p>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-success btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Details
                                                </a>
                                            </td>
                                        </div>
                                    </div>
                                    <div class="card mx-auto" style="width: 16rem;">
                                        <img src="{{ asset('AdminLTE/') }}/dist/img/nyuntik.png" class="card-img-top"
                                            alt="...">
                                        <div class="text-center card-body">
                                            <h5>Tenun Songket Motif Bulan</h5>
                                            <p class="card-text"><i class="fas fa-tag"></i><span class="ml-3"></span>
                                                Rp. 1.500.000</p>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-success btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Details
                                                </a>
                                            </td>
                                        </div>
                                    </div>
                                    <div class="card mx-auto " style="width: 16rem;">
                                        <img src="{{ asset('AdminLTE/') }}/dist/img/nyuntik.png" class="card-img-top"
                                            alt="...">
                                        <div class="text-center card-body">
                                            <h5>Tenun Songket Motif Bulan</h5>
                                            <p class="card-text"><i class="fas fa-tag"></i><span class="ml-3"></span>
                                                Rp. 1.500.000</p>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-success btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    Details
                                                </a>
                                            </td>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
<!-- /.content-wrapper -->
@endsection
