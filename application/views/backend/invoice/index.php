<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              
                  <a href="<?php echo base_url(); ?>admin/invoice/tambah" class="btn btn-success"><i class="far fa-plus-square"></i> Tambah Invoice</a>
                  <a class="btn btn-primary" style="color: white"  href="<?php echo base_url('admin/invoice/print') ?>"><i class="fas fa-fw fa-print"></i> Print</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php echo $this->session->flashdata('message'); ?>
                <tr>
                      <td colspan="4">
                          <?php $attributes = array('class' => 'row'); ?>
                          <?php echo form_open('admin/invoice/search',$attributes);?>
                              <input type="text" name="keyword" placeholder="Search" class="form-control col-md-5">
                              <input type="submit" value="Cari" class="btn btn-warning col-md-1">
                          <?php echo form_close();?>		
                      </td>
                </tr>
              </div>
              <!-- <div class="search-element">
                  <?php $attributes = array('class' => 'row'); ?>
                  <?php echo form_open('admin/invoice/search', $attributes); ?>
                  <input class="form-control" name="keyword" type="text" placeholder="Search" aria-label="Search" data-width="250">
                  <button class="btn" value="Cari" type="submit"><i class="fas fa-search mb-3"></i></button>
                  <?php echo form_close(); ?>
              </div> -->
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Mitra</th>
                    <th>Nama Mitra</th>
                    <th>Jumlah Pengiriman</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                  $no = 1;
                  foreach ($invoice as $invoice) :
                  ?>
                  <tbody>
                    <td><?php echo $no++?></td>
                    <td><?php echo $invoice->nama_mitra ?></td>
                    <td><?php echo $invoice->jumlah_pengiriman ?></td>
                    <td><?php echo $invoice->alamat ?></td>
                    <td>
                      <?php echo anchor(
                                'admin/invoice/detail/' . $invoice->id_invoice,
                                '<div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></div>'
                            ) ?>
                        </td>

                        <td>
                            <?php echo anchor(
                                'admin/invoice/edit/' . $invoice->id_invoice,
                                '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>'
                            ) ?>
                        </td>

                        <td>
                            <!-- <a class="btn btn-danger btn-sm" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"
                            href="<?php echo base_url('admin/invoice/hapus/') ?>/<?php echo $invoice->id_invoice ?>">
                            <i class="fa fa-trash"></i>
                        </a> -->

                            <a onclick="deleteConfirm('<?php echo site_url('admin/invoice/hapus/' . $invoice->id_invoice) ?>')" href="#!" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></a>
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
