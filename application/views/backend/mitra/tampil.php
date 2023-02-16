    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  </head>
  <body>
  <section class="section">
    <div class="card-body">
      <a href="<?php echo base_url(); ?>admin/mitra/tambah" class="btn btn-success"><i class="far fa-plus-square"></i> Tambah Mitra</a>
      <a class="btn btn-primary" href="<?php echo base_url('admin/mitra/print') ?>"><i class="fas fa-fw fa-print"></i> Print</a>
    </div>
    <?php echo $this->session->flashdata('message'); ?>
      <table class="table is-narrow" id="example1">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nama Mitra</th>
          <th>Type</th>
          <th>Alamat Mitra</th>
          <th>Nomer Telepon</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($mitra as $mitra){
          echo "<tr>";
          echo "<td>$no++</td>";
          echo "<td>$mitra->nama_mitra</td>";
          echo "<td>$mitra->type</td>";
          echo "<td>$mitra->alamat_mitra</td>";
          echo "<td>$mitra->no_telepon</td>";
          echo "<td>
          <a href='mitra/edit/$mitra->id_mitra', class='btn btn-primary btn-sm'>Edit</a>
          <a onclick='deleteConfirm('admin/mitra/hapus/$mitra->id_mitra')' href='mitra/hapus/$mitra->id_mitra' class='btn btn-sm btn-danger '>Hapus</a>
          </td>";
          echo "</tr>";
        }
        ?>
        </tbody>
      </table>
    </div>
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
  </body>

  