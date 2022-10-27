<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              
                  <a href="<?php echo base_url(); ?>admin/produk/tambah" class="btn btn-sm btn-info btn-flat"><i class="fa fa-edit"></i> Tambah Produk</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php echo $this->session->flashdata('message'); ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id Produk</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Type</th>
                    <th>Stok</th>
                    <th>Merk</th>
                    <th>Seri</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                  $no = 1;
                  foreach ($produk as $produk) :
                  ?>
                  <tbody>
                    <td><?php echo $no++?></td>
                    <td><?php echo $produk->kode_produk ?></td>
                    <td><?php echo $produk->nama_produk ?></td>
                    <td><?php echo $produk->type ?></td>
                    <td><?php echo $produk->stok ?></td>
                    <td><?php echo $produk->merk_produk ?></td>
                    <td><?php echo $produk->seri_produk ?></td>

                    <td>
                        <?php echo anchor(
                            'admin/produk/edit/' . $produk->id_produk,
                            '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>'
                        ) ?>
                        <!-- <button class="btn btn-warning btn-sm fas fa-edit" data-toggle="modal" data-target="#EditProduk"></button> -->

                    </td>

                    <td>
                        <!-- <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="<?php echo base_url('admin/produk/hapus_data/') ?>/<?php echo $produk->id_produk ?>">
                            <i class="fa fa-trash"></i>
                        </a> -->

                        <a onclick="deleteConfirm('<?php echo site_url('admin/produk/hapus/' . $produk->id_produk) ?>')" href="#!" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></a>
                    </td>
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



<!-- edit Data -->
<div class="modal fade" id="EditProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/produk/edit') ?>" method="post" enctype="multipart/form-data">

                <div class="row">
                        <div class="col-md-6">
                         
                            <div class="form-group">
                                <label>Kode Produk</label>
                                <input type="text" name="kode_produk" class="form-control"  required>
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" name="type" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" name="stok" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Seri</label>
                                <input type="text" name="seri" class="form-control" required>
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

    <!-- /.content -->
  </div>

  <script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
