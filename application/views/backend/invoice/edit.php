<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" action="<?php echo base_url('admin/invoice/proses_edit_data/' . $invoice['id_invoice']) ?>">
                <input type="hidden" name="id" value="<?php echo $invoice['id_invoice'] ?>" id="id">
                  <div class="form-group">
                    <label for="nama_mitra">Nama Mitra</label>
                    <input type="text" name="nama_mitra" class="form-control" id="nama_mitra" value="<?php echo $invoice['nama_mitra'] ?>" placeholder="Masukkan Kode Mitra">
                  </div>
                  <div class="form-group">
                    <label for="jumlah_pengiriman">Jumlah Pengiriman</label>
                    <input type="text" class="form-control" name="jumlah_pengiriman" id="jumlah_pengiriman" value="<?php echo $invoice['jumlah_pengiriman'] ?>" placeholder="Masukkan Jumlah">
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