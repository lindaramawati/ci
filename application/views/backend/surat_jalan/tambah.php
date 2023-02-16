<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/surat_jalan/proses_tambah') ?>" method="post" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="metode_pengiriman">Metode Pengiriman</label>
                    <input type="text" class="form-control" name="metode_pengiriman" id="metode_pengiriman" placeholder="Masukkan Jumlah" required>
                  </div>
                  <div class="form-group">
                    <label for="nomer_kendaraan">Nomer Kendaraan</label>
                    <input type="text" class="form-control" name="nomer_kendaraan" id="nomer_kendaraan" placeholder="Masukkan Nomer Kencana" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- /.card-body -->
              </form>
              
            </div>
          </div>
        </div>
        <!-- /.row -->        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->