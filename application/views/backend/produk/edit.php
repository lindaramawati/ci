<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" action="<?php echo base_url('admin/produk/proses_edit_data/' . $produk['id_produk']) ?>">
                <input type="hidden" name="id" value="<?php echo $produk['id_produk'] ?>" id="id">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_produk">ID Produk</label>
                    <input readonly type="text" class="form-control" name="id_produk" id="id_produk" value="<?php echo $produk['id_produk'] ?>" placeholder="Masukkan Nomer Produk">
                  </div>
                  <div class="form-group">
                    <label for="kode_produk">Kode Produk</label>
                    <input type="text" class="form-control" name="kode_produk" id="kode_produk" value="<?php echo $produk['kode_produk'] ?>" placeholder="Masukkan Nomer Produk">
                  </div>
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?php echo $produk['nama_produk'] ?>" placeholder="Masukkan Kode Produk">
                  </div>
                  <div class="form-group">
                    <label for="nama_kategori">Type</label>
                    <input type="text" class="form-control" name="type" id="type" value="<?php echo $produk['type'] ?>" placeholder="Masukkan Nama Kategori">
                  </div>
                  <div class="form-group">
                    <label for="deskripsi_produk">jenis</label>
                    <input type="text" class="form-control" name="jenis" id="jenis" value="<?php echo $produk['jenis'] ?>" placeholder="Masukkan Deskripsi Produk">
                  </div>
                  <div class="form-group">
                    <label for="unit">Merk</label>
                    <input type="text" name="merk" id="merk" class="form-control"  value="<?php echo $produk['merk_produk'] ?>" placeholder="Masukkan Unit">
                  </div>
                  <div class="form-group">
                    <label for="unit">Seri</label>
                    <input type="text" name="seri" class="form-control" id="seri" value="<?php echo $produk['seri_produk'] ?>" placeholder="Masukkan Unit">
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