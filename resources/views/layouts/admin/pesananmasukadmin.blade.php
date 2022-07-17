

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
            <h1>Pesanan Masuk</h1>
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
                <h3 class="card-title">Daftar Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No Transaksi</th>
                    <th>Nama Pesanan</th>
                    <th>Waktu Pesanan</th>
                    <th>Bank</th>
                    <th>Jasa Pengiriman</th>
                    <th>Total Pembayaran</th>
                    <th>Status Produk</th>
                    <th>Jadwal Pengiriman</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>T001</td>
                    <td>Putu Dehan</td>
                    <td>10-05-2022</td>
                    <td>BCA</td>
                    <td>J&T</td>
                    <td>Rp. 1.300.000</td>
                    <td>Diproses</td>
                    <td>12-05-2022</td>
                    <td>Jln. Pasekan, Perumahan Tegal Sari, Batubulan Gianyar</td>
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
