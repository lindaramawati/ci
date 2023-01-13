<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <a href="<?php echo base_url(); ?>admin/pesanan/tambah" class="btn btn-success"><i class="far fa-plus-square"></i> Tambah Order</a>
                  <a class="btn btn-primary" href="<?php echo base_url('admin/pesanan/print') ?>"><i class="fas fa-fw fa-print"></i> Print</a>
              </div>
              <div class="card-body">
              <?php echo $this->session->flashdata('message'); ?>
                <tr>
                      <td colspan="4">
                          <?php $attributes = array('class' => 'row'); ?>
                          <?php echo form_open('admin/pesanan/search',$attributes);?>
                              <input type="text" name="keyword" placeholder="Search" class="form-control col-md-5">
                              <input type="submit" value="Cari" class="btn btn-info col-md-1">
                          <?php echo form_close();?>		
                      </td>
                </tr>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Order</th>
                    <th>Nama Mitra</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Jumlah Pesanan</th>
                    <th>Nama Produk</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                  $no = 1;
                  foreach ($pesanan as $pesanan) :
                  ?>
                  <tbody>
                    <td><?php echo $no++?></td>
                    <td><?php echo $pesanan->nama_mitra ?></td>
                    <td><?php echo $pesanan->tanggal_pemesanan ?></td>
                    <td><?php echo $pesanan->jumlah_pesanan ?></td>
                    <td><?php echo $pesanan->nama_produk ?></td>
                        <td>
                            <?php echo anchor(
                                'admin/pesanan/edit/' . $pesanan->id,
                                '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"><style="color: white"></i></div>'
                            ) ?>
                        </td>

                        <td>
                            <!-- <a class="btn btn-danger btn-sm" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"
                            href="<?php echo base_url('admin/pesanan/hapus/') ?>/<?php echo $pesanan->id ?>">
                            <i class="fa fa-trash"></i>
                        </a> -->

                            <a onclick="deleteConfirm('<?php echo site_url('admin/pesanan/hapus/' . $pesanan->id) ?>')" href="#!" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></a>
                        </td>
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
</div>

  <script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>
