<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
             
              <form action="<?php echo base_url('admin/kategori/proses_tambah') ?>" method="post" role="form">
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="kode_kategori">kode Kategori</label>
                    <input type="text" class="form-control" name="kode_kategori" id="kode_kategori" placeholder="Masukkan Nomer Produk" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Masukkan Nama Produk" required>
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