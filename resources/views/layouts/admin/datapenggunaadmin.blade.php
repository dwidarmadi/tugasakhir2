

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
            <h1>Data Pengguna</h1>
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
                <h3 class="card-title">Daftar Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Ponsel</th>
                    <th>Role</th>
                    <th>Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Komang Odo</td>
                    <td>komangodo@gimail.com</td>
                    <td>087861356278/td>
                    <td>Seller</td>
                    <td>03-04-2022</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Putu Dehan</td>
                    <td>putudehan@gmail.com</td>
                    <td>089786543565</td>
                    <td>Buyer</td>
                    <td>20-04-2022</td>
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
  </div>
  <!-- /.content-wrapper -->

@include('layouts.admin.footeradmin')
