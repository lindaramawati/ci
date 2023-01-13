<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" action="<?php echo base_url('admin/kategori/proses_edit_data/' . $kategori['id_kategori']) ?>">
                <input type="hidden" name="id" value="<?php echo $kategori['id_kategori'] ?>" id="id">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="kode_kategori">Kode Kategori</label>
                    <input type="text" class="form-control" name="kode_kategori" id="kode_kategori" value="<?php echo $kategori['kode_kategori'] ?>" placeholder="Masukkan Kode Kategori" required>
                  </div>
                  <div class="form-group">
                    <label for="nama_kategori">Nama kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?php echo $kategori['nama_kategori'] ?>" placeholder="Masukkan Nama Kategori" required>
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