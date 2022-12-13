<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/pesanan/proses_tambah') ?>" method="post" role="form">
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
                    <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
                    <input type="date" class="form-control" name="tanggal_pemesanan" id="tanggal_pemesanan" placeholder="Masukkan Tanggal Pemesanan" required>
                  </div>
                  <div class="form-group">
                    <label for="jumlah_pesanan">Jumlah Pesanan</label>
                    <input type="text" class="form-control" name="jumlah_pesanan" id="jumlah_pesanan" placeholder="Masukkan Jumlah Pesanan" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk" required>
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