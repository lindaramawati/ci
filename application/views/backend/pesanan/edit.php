<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" action="<?php echo base_url('admin/pesanan/proses_edit_data/' . $pesanan['id_order']) ?>">
                <input type="hidden" name="id" value="<?php echo $pesanan['id_order'] ?>" id="id">
                  <div class="form-group">
                    <label for="nama_mitra">Nama Mitra</label>
                    <input type="text" name="nama_mitra" class="form-control" id="nama_mitra" value="<?php echo $pesanan['nama_mitra'] ?>" placeholder="Masukkan Kode Mitra" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_pemesanan">Tanggal pemesanan</label>
                    <input type="date" class="form-control" name="tanggal_pemesanan" id="tanggal_pemesanan" value="<?php echo $pesanan['tanggal_pemesanan'] ?>" placeholder="Masukkan Tanggal Pemesanan" required>
                  </div>
                  <div class="form-group">
                    <label for="jumalh_pesanan">Jumlah pesanan</label>
                    <input type="text" class="form-control" name="jumlah_pesanan" id="jumlah_pesanan" value="<?php echo $pesanan['jumlah_pesanan'] ?>" placeholder="Masukkan Alamat Mitra" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control"  value="<?php echo $pesanan['nama_produk'] ?>" placeholder="Masukkan Nama Produk" required>
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