<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" action="<?php echo base_url('admin/invoice/proses_edit_data/' . $invoice['id']) ?>">
                <input type="hidden" name="id" value="<?php echo $invoice['id'] ?>" id="id">
                  <div class="form-group">
                  <label for="name">Nama Mitra</label>
                            <div class="form-group">
                               <select required name="nama_mitra"class="form-control">
        	                       
                                    <option value="">--Pilih Mitra--</option>
                                <?php                                
<<<<<<< HEAD
                                   foreach ($invoice as $dxd) {  
=======
                                   foreach ($pelanggan as $dxd) {  
>>>>>>> 82d8910163547ddac04601b7c65a60834b28b238
                                       
		                             echo "<option value='".$dxd->nama_mitra."'>".$dxd->nama_mitra."</option>";
		                                               }
		                                       echo"
		                                    </select>"
	                              	?>
                                </div>
                            </div>
                  <div class="form-group">
                    <label for="jumlah_pengiriman">Jumlah Pengiriman</label>
                    <input type="text" class="form-control" name="jumlah_pengiriman" id="jumlah_pengiriman" value="<?php echo $invoice['jumlah_pengiriman'] ?>" placeholder="Masukkan jumlah_pengiriman"required>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat Mitra</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $invoice['alamat'] ?>" placeholder="Masukkan Alamat Mitra" required>
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