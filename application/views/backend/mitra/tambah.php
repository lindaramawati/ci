<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('admin/mitra/proses_tambah') ?>" method="post" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_mitra">Nama Mitra</label>
                    <input type="text" name="nama_mitra" class="form-control" id="nama_mitra" placeholder="Masukkan Nama Mitra">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Masukkan Type">
                  </div>
                  <div class="form-group">
                    <label for="alamat_mitra">Alamat Mitra</label>
                    <input type="text" class="form-control" name="alamat_mitra" id="alamat_mitra" placeholder="Masukkan Alamat Mitra">
                  </div>
                  <div class="form-group">
                    <label for="no_telepon">Nomer Telepon</label>
                    <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Masukkan Nomer Telepon">
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