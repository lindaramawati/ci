<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/invoice/proses_tambah') ?>" method="post" role="form">
                <div class="card-body">
                  <div class="form-group">
                  <label for="name">Nama Mitra</label>
                            <div class="form-group">
                               <select required name="nama_mitra"class="form-control">
        	                       
                                    <option value="">--Pilih Mitra--</option>
                                <?php                                
                                   foreach ($pelanggan as $dxd) {  
                                       
		                             echo "<option value='".$dxd->nama_mitra."'>".$dxd->nama_mitra."</option>";
		                                               }
		                                       echo"
		                                    </select>"
	                              	?>
                                </div>
                            </div>
                  <div class="form-group">
                    <label for="alamat">Jumlah Pengiriman</label>
                    <input type="text" class="form-control" name="jumlah_pengiriman" id="jumlah_pengiriman" placeholder="Masukkan Jumlah">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Jumlah">
                  </div>
<<<<<<< HEAD
=======
                  <div class="form-group">
                    <label for="tanggal_pengiriman">Tanggal Pengiriman</label>
                    <input type="date" class="form-control" name="tanggal_pengiriman" id="tanggal_pengiriman" placeholder="Masukkan Tanggal">
                  </div>
>>>>>>> 82d8910163547ddac04601b7c65a60834b28b238
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