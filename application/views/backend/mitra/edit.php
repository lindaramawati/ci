<div class="main-content">
    <section class="section">

        <div class="container-fluid">

            <?php foreach ($mitra as $mitra) : ?>

                <form action="<?php echo base_url('admin/mitra/fungsiUpdate') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Mitra</label>
                                <input type="text" name="nama_mitra" class="form-control" value="<?php echo $mitra->nama_mitra ?>">
                                <input type="hidden" name="id_mitra" class="form-control" value="<?php echo $mitra->id_mitra ?>">
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <input type="text" name="type" class="form-control" value="<?php echo $mitra->type ?>">
                                <input type="hidden" name="id_mitra" class="form-control" value="<?php echo $mitra->id_mitra ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat Mitra</label>
                                <input type="text" name="alamat_mitra" class="form-control" value="<?php echo $mitra->alamat_mitra ?>">
                                <input type="hidden" name="id_mitra" class="form-control" value="<?php echo $mitra->id_mitra ?>">
                            </div>
                            <div class="form-group">
                                <label>Nomer Telepon Mitra</label>
                                <input type="text" name="no_telepon" class="form-control" value="<?php echo $mitra->no_telepon ?>">
                                <input type="hidden" name="id_mitra" class="form-control" value="<?php echo $mitra->id_mitra ?>">
                            </div>

                    </div>

                    <?php echo anchor('admin/mitra/', '<div class="btn btn-danger mb-1">Kembali</div>') ?>
                    <button type="submit" class="btn btn-primary btn sm mb-1 ml-3">Simpan</button>
                </form>

            <?php endforeach; ?>
        </div>
    </section>
</div>