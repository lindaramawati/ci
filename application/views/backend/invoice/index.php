    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/invoice/tambah" class="btn btn-sm btn-info btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                  </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Pengiriman</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Jumlah</th>
                    <th>Mitra</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>001</td>
                    <td>09/02/2022</td>
                    <td>2</td>
                    <td>Eny</td>
                    <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/invoice/detail" class="btn btn-sm btn-success btn-flat"><i class="fa fa-eye"></i>Detail</a>
                          </div>
                    </td>
                  </tr>
                  <tr>
                    <td>002</td>
                    <td>11/04/2022</td>
                    <td>3</td>
                    <td>Madun</td>
                    <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/invoice/detail" class="btn btn-sm btn-success btn-flat"><i class="fa fa-eye"></i>Detail</a>
                          </div>
                    </td>
                  </tr>
                  <tr>
                    <td>003</td>
                    <td>20/04/2022</td>
                    <td>6</td>
                    <td>May</td>
                    <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/invoice/detail" class="btn btn-sm btn-success btn-flat"><i class="fa fa-eye"></i>Detail</a>
                          </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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
