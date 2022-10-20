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
                                <input type="text" name="id_pengguna" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Mitra</label>
                                <input type="text" name="nama_pengguna" class="form-control" required>
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
