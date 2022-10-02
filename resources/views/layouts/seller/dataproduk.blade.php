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
                        <a href="#" class="nav-link">
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
    <section class="content">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><i class="fas fa-layer-group"><span class="ml-3"></span></i>Data Produk</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="card-header">
                                <h3 class="card-title">Daftar Produk</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div>
                                    <a href="product/create" class="btn btn-primary mb-2"><i
                                            class="fas fa-plus mr-2"></i>Tambah Produk</a>
                                </div>
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle;">No</th>
                                            <th style="vertical-align: middle;">Nama Produk</th>
                                            <th style="vertical-align: middle;">Deskripsi</th>
                                            <th style="vertical-align: middle;">Harga</th>
                                            <th style="vertical-align: middle;">Jumlah</th>
                                            <th style="vertical-align: middle;">Foto</th>
                                            <th style="vertical-align: middle;">Status</th>
                                            <th style="vertical-align: middle;">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($products as $dm => $pr)
                                        <tbody>
                                            <tr>
                                                <td>{{ ++$dm }}</td>
                                                <td>{{ $pr->name }}</td>
                                                <td>{{ $pr->description }}</td>
                                                <td>Rp. {{ number_format($pr->price) }}</td>
                                                <td>{{ $pr->qty }}</td>
                                                <td>
                                                    <img src="{{ asset('photos/' . $pr->photo) }}" alt=""
                                                        width="150px" height="150px">
                                                </td>
                                                <td>
                                                    @if ($pr->status === 'Tidak Tersedia')
                                                        <span class="badge badge-danger">{{ $pr->status }}</span>
                                                    @else
                                                        <span class="badge badge-success">{{ $pr->status }}</span>
                                                    @endif
                                                </td>
                                                <td class="project-actions text-right" style="vertical-align: middle;">
                                                    <div style="display: flex; flex-direction:row; gap:10px;">
                                                        <a class="btn btn-primary btn-sm"
                                                            href={{ route('product.show', $pr->idproduct) }}>
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            Lihat
                                                        </a>
                                                        <a class="btn btn-info btn-sm"
                                                            href={{ route('product.edit', $pr->idproduct) }}>
                                                            <i class="fas fa-pencil-alt">
                                                            </i>
                                                            Edit
                                                        </a>
                                                        <a class="btn btn-sm btn-danger" data-toggle="modal"
                                                            data-target="#idproduct" data-id="{{ $pr->idproduct }}">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                <div class="modal fade" id="idproduct">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-default">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Produk</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-content">
                                            </div>
                                        </div>
                                    </div>
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
        <!-- /.content-wrapper -->
    @endsection

    @section('scriptPlace')
        <!-- Init Modal -->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#idproduct").on('show.bs.modal', function(e) {
                    var idProduct = $(e.relatedTarget).data('id');
                    $.get('/showdetail/' + idProduct, function(data) {
                        $(".modal-content").html(data);
                    });
                });
            });
        </script>
        <!-- End -->
    @endsection
