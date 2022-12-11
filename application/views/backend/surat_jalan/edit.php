<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" action="<?php echo base_url('admin/surat_jalan/proses_edit_data/' . $surat_jalan['id_suratjalan']) ?>">
                <input type="hidden" name="id" value="<?php echo $surat_jalan['id_suratjalan'] ?>" id="id">
                  <div class="form-group">
                    <label for="metode_pengiriman">Metode Pengiriman</label>
                    <input type="text" name="metode_pengiriman" class="form-control" id="metode_pengiriman" value="<?php echo $surat_jalan['metode_pengiriman'] ?>" placeholder="Masukkan Metode Pengiriman">
                  </div>
                  <div class="form-group">
                    <label for="nomer_kendaraan">Nomer Kendaraan</label>
                    <input type="text" class="form-control" name="nomer_kendaraan" id="nomer_kendaraan" value="<?php echo $surat_jalan['nomer_kendaraan'] ?>" placeholder="Masukkan Nomer Kendaraan">
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