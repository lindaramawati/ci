<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              
                  <a href="<?php echo base_url(); ?>admin/order/tambah" class="btn btn-sm btn-info btn-flat"><i class="far fa-plus-square"></i> Tambah Pesanan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php echo $this->session->flashdata('message'); ?>
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Order</th>
                    <th>Nama Mitra</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Jumlah Pesanan</th>
                    <th>Nama Produk</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                  </thead>
                  <?php
                  $no = 1;
                  foreach ($order as $order) :
                  ?>
                  <tbody>
                    <td><?php echo $no++?></td>
                    <td><?php echo $order->nama_mitra ?></td>
                    <td><?php echo $order->tanggal_pemesanan ?></td>
                    <td><?php echo $order->jumlah_pesanan ?></td>
                    <td><?php echo $order->nama_produk ?></td>

                    <td>
                        <?php echo anchor(
                            'admin/order/edit/' . $order->id_order,
                            '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>'
                        ) ?>
                        <!-- <button class="btn btn-warning btn-sm fas fa-edit" data-toggle="modal" data-target="#EditProduk"></button> -->

                    </td>

                    <td>
                        <!-- <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="<?php echo base_url('admin/order/hapus_data/') ?>/<?php echo $order->id_order ?>">
                            <i class="fa fa-trash"></i>
                        </a> -->

                        <a onclick="deleteConfirm('<?php echo site_url('admin/order/hapus/' . $order->id_order) ?>')" href="#!" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></a>
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
