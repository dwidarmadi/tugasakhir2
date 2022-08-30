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
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="far fa-file-alt nav-icon"></i>
                        <p>Repots</p>
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
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-user"><span class="ml-3"></span></i>Pengguna</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('AdminLTE') }}/dist/img/user4-128x128.jpg" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">I KADEK DWI DARMADI</h3>

                        <p class="text-muted text-center">Buyer</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Email</b> <a class="float-right">ddarmadi54@gmail.com</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nomor Telepon</b> <a class="float-right">087861393876</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" id="tabprofil">Edit
                                    Profil</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tabpassword">Edit
                                    Password</a>
                                </li>
                        </ul>
                    </div>

                    <!-- /.card-header -->
                    {{-- <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="email" class="form-control" id="exampleInputNama"
                        placeholder="Nama Pengguna">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No. Telepon</label>
                    <input type="text" class="form-control" id="exampleInputNoTelepon"
                        placeholder="Nomor Telepon">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </form> --}}


                    <form id="editpassword">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password Lama</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password Lama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password Baru</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password Baru">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Konfirmasi Password Baru">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>

                    <form id="detailuser">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="email" class="form-control" id="exampleInputNama"
                                    placeholder="Nama Pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. Telepon</label>
                                <input type="text" class="form-control" id="exampleInputNoTelepon"
                                    placeholder="Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Foto Profil</label><br>
                                <input type="file" name="attachment">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
@section('scriptPlace')
    <script type="text/javascript">
        $("#detailuser").show();
        $("#editpassword").hide();

        $("#tabprofil").on('click', function(){
            $("#detailuser").show();
            $("#tabprofil").addClass('active')
            $("#tabpassword").removeClass('active')
            $("#editpassword").hide();
        })

        $("#tabpassword").on('click', function(){
            $("#detailuser").hide();
            $("#tabpassword").addClass('active')
            $("#tabprofil").removeClass('active')
            $("#editpassword").show();
        })
    </script>
@endsection
