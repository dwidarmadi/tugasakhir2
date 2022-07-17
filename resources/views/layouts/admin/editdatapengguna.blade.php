

@include('layouts.admin.headeradmin')

@include('layouts.admin.navbaradmin')

@include('layouts.admin.sidebaradmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Pengguna</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Table input -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <!-- left column -->
                <div class="col-md-4">
                 <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Data Bank</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="email" class="form-control" id="exampleInputNama" placeholder="Nama Pengguna">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. Telepon</label>
                                <input type="text" class="form-control" id="exampleInputNoTelepon" placeholder="Nomor Telepon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Role</label>
                                <div class="form-group">
                                    <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                      <option>Admin</option>
                                      <option>Seller</option>
                                      <option>Buyer</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
  </div>
  <!-- /.table input -->
  <!-- /.content-wrapper -->

@include('layouts.admin.footeradmin')
