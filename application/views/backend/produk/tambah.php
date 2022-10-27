<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/produk/proses_tambah') ?>" method="post" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_produk">kode Produk</label>
                    <input type="text" class="form-control" name="kode_produk" id="kode_produk" placeholder="Masukkan Nomer Produk">
                  </div>
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="Masukkan Kode Produk">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Masukkan Nama Kategori">
                  </div>
                  <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan Deskripsi Produk">
                  </div>
                  <div class="form-group">
                    <label for="merk">merk</label>
                    <input type="text" class="form-control" name="merk" id="merk" placeholder="Masukkan Unit">
                  </div>
                  <div class="form-group">
                    <label for="seri">seri</label>
                    <input type="text" class="form-control" name="seri" id="seri" placeholder="Masukkan Unit">
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