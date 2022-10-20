<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
              <?php echo $this->session->flashdata('message'); ?>

                <buttton class="btn btn-primary mb-3" data-toggle="modal" data-target="#TambahMitra">
                  <i class="fas fa-user-plus fa-sm"></i> Tambah Mitra</buttton>
                  <a  class="btn btn-warning mb-3" href = "<?php echo base_url('admin/mitra/print')?>" >
                  <i class="fas fa-fw fa-print"></i> Print</a>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <th>No</th>
                  <th>ID Mitra</th>
                  <th>Nama Mitra</th>
                  <th>Type</th>
                  <th>Alamat</th>
                  <th>Nomer Telepon</th>

                  <th colspan="2">Aksi</th>
                </thead>

                <?php
                $no = 1;
                foreach ($mitra as $mitra) :
                ?>
                <tbody>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $mitra->id_mitra ?></td>
                    <td><?php echo $mitra->nama_mitra ?></td>
                    <td><?php echo $mitra->type ?></td>
                    <td><?php echo $mitra->alamat_mitra ?></td>
                    <td><?php echo $mitra->no_telepon ?></td>

                    <td>
                        <?php echo anchor(
                            'admin/mitra/halamanUpdate/' . $mitra->id_mitra,
                            '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>'
                        ) ?>
                    </td>

                    <td>
                        <!-- <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="<?php echo base_url('admin/mitra/hapus_data/') ?>/<?php echo $mitra->id_mitra ?>">
                            <i class="fa fa-trash"></i>
                        </a> -->

                        <a onclick="deleteConfirm('<?php echo site_url('admin/mitra/fungsiDelete/' . $mitra->id_mitra) ?>')" href="#!" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></a>
                    </td>
                </tbody>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
      </section>

       <!-- Modal Tambah Atasan -->
<div class="modal fade" id="TambahMitra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mitra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/mitra/fungsiTambah') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ID Mitra</label>
                                <input type="text" name="id_mitra" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Mitra</label>
                                <input type="text" name="nama_mitra" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" name="type" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat Mitra</label>
                                <input type="text" name="alamat_mitra" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Nomer Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" required>
                            </div>
                            
                        
                        </div>
                    </div>
                    
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">Data yang sudah dihapus tidak bisa dikembalikan</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>