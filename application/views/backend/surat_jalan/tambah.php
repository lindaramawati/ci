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
                           <label for="name">Nama Produk</label>
                              <div class="form-group">
                               <select required name="nama_produk"class="form-control">
        	                       
                                    <option value="">--Pilih Produk--</option>
                                <?php                                
                                   foreach ($produk as $dxd) {  
                                       
		                             echo "<option value='".$dxd->nama_produk."'>".$dxd->nama_produk."</option>";
		                                               }
		                                       echo"
		                                    </select>"
	                              	?>
                                </div>
                            </div>
                            <div class="form-group">
                           <label for="name">Alamat</label>
                              <div class="form-group">
                               <select required name="alamat"class="form-control">
        	                       
                                    <option value="">--Pilih Alamat--</option>
                                <?php                                
                                   foreach ($alamat as $dxd) {  
                                       
		                             echo "<option value='".$dxd->alamat."'>".$dxd->alamat."</option>";
		                                               }
		                                       echo"
		                                    </select>"
	                              	?>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="name">Tanggal Pemesanan</label>
                              <div class="form-group">
                               <select required name="tanggal_pengiriman"class="form-control">
        	                       
                                    <option value="">--Pilih Tanggal Pesanan--</option>
                                <?php                                
                                   foreach ($tgl as $dxd) {  
                                       
		                             echo "<option value='".$dxd->tanggal_pengiriman."'>".$dxd->tanggal_pengiriman."</option>";
		                                               }
		                                       echo"
		                                    </select>"
	                              	?>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="name">Jumlah</label>
                              <div class="form-group">
                               <select required name="jumlah_pengiriman"class="form-control">
        	                       
                                    <option value="">--Pilih Jumlah Pengiriman--</option>
                                <?php                                
                                   foreach ($jumlah as $dxd) {  
                                       
		                             echo "<option value='".$dxd->jumlah_pengiriman."'>".$dxd->jumlah_pengiriman."</option>";
		                                               }
		                                       echo"
		                                    </select>"
	                              	?>
                                </div>
                            </div>
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