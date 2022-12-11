<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" role="form" action="<?php echo base_url('admin/mitra/proses_edit_data/' . $mitra['id_mitra']) ?>">
                <input type="hidden" name="id" value="<?php echo $mitra['id_mitra'] ?>" id="id">
                  <div class="form-group">
                    <label for="nama_mitra">Nama Mitra</label>
                    <input type="text" name="nama_mitra" class="form-control" id="nama_mitra" value="<?php echo $mitra['nama_mitra'] ?>" placeholder="Masukkan Kode Mitra"required>
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="type" value="<?php echo $mitra['type'] ?>" placeholder="Masukkan Type"required>
                  </div>
                  <div class="form-group">
                    <label for="alamat_mitra">Alamat Mitra</label>
                    <input type="text" class="form-control" name="alamat_mitra" id="alamat_mitra" value="<?php echo $mitra['alamat_mitra'] ?>" placeholder="Masukkan Alamat Mitra" required>
                  </div>
                  <div class="form-group">
                    <label for="no_telepon">Nomer Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" class="form-control"  value="<?php echo $mitra['no_telepon'] ?>" placeholder="Masukkan Nomer Telepon" required>
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