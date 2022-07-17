

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
            <h1>Tambah Data Jasa Pengiriman</h1>
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
                            <h3 class="card-title">Input Data Jasa Pengiriman</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Jasa Pengiriman">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">No. Telepon</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Tambah</button>
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
