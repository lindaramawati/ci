<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              $table = "produk";
              $field = "id_produk";

              $lastkode = $this->admin->getMax($table, $field);
              $noUrut = (int) substr($lastkode, 1, 6);
              $noUrut++;
              $str = "P";
              $newKode = $str . sprintf('%06s', $noUrut);

               ?>
              <form action="<?php echo base_url('admin/produk/proses_tambah') ?>" method="post" role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_produk">ID Produk</label>
                    <input readonly type="text" value="<?php echo $newKode; ?>" class="form-control" name="id_produk" id="id_produk">
                  </div>
                  <div class="form-group">
                    <label for="kode_produk">kode Produk</label>
                    <input readonly value="<?= set_value('kode_produk'); ?>" name="kode_produk" id="kode_produk" type="text" class="form-control" placeholder="Kode Barang..." required>
                        <?= form_error('kode_produk', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="Masukkan Nama Produk" required>
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Masukkan Nama Kategori" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis">jenis</label>
                  
                    <div class="col-12 col-md-9">
                      <select name="jenis" id="id_jenis" class="form-control">
                        <option value="" hidden>Pilih</option>
                        <?php foreach ($jenis as $key){
                          echo "<option value='".$key->kode_kategori."'>".$key->nama_kategori."</option>";
		                                               }
		                                       echo"
		                                    </select>"
	                              	?>              
                      </select>
                    </div>
                     
                  </div>
                  <div class="form-group">
                    <label for="merk">merk</label>
                    <input type="text" class="form-control" name="merk" id="merk" placeholder="Masukkan Merk" required>
                  </div>
                  <div class="form-group">
                    <label for="seri">seri</label>
                    <input type="text" class="form-control" name="seri" id="seri" placeholder="Masukkan Unit" required>
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
  </script>


<!-- Mengambik Kode Barang -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    function padLeadingZeros(num, size) {
        var s = num + "";
        while (s.length < size) s = "0" + s;
        return s;
    }
    $(document).ready(function() {


        $("#id_jenis").change(function() {
            const jenis = <?php echo json_encode($jenis); ?>;
           
            var count = Object.keys(jenis).length;

            var test = $('#id_jenis :selected').val();

            for (let index = 0; index < count; index++) {
                if (jenis[index].id_jenis == test) {
                    var kodejenis = jenis[index].kode_jenis;
                }

            }
            var kodejenis = test;
            var coba = $('input#kode_produk').val(kodejenis);
            var urlpos = "<?php echo site_url('admin/Code_controller/getCodebarang/'); ?>" + kodejenis;

            var kodejenis = $("#kode_produk").val();
            var kodebarang = new XMLHttpRequest();
            kodebarang.onload = function() {

                var banyakkode = JSON.parse(this.responseText) ;

           
                // var tambahkode = parseInt(banyakkode.banyakbarang) +1;
               
                if (kodejenis.length == 2) {
                    var kodeakhir = kodejenis.toString() +padLeadingZeros(banyakkode.banyakbarang,2).toString();
                }
                if (kodejenis.length == 1) {
                    var kodeakhir = kodejenis.toString() +padLeadingZeros(banyakkode.banyakbarang,3).toString();
                    
                }              
                var coba = $('input#kode_produk').val(kodeakhir);
                var kode = $('input[name=kode]').val(kodejenis);
            }

            kodebarang.open("GET", urlpos, true);
            kodebarang.send();
        });
            // $("#jenis_id").change(function() {
            //     const jenis = <?php echo json_encode($jenis); ?>;
            //     var count = Object.keys(jenis).length;

            //     var test = $('#jenis_id :selected').val();

            //     for (let index = 0; index < count; index++) {
            //         if (jenis[index].id_jenis == test) {
            //             var kodejenis = jenis[index].kode_jenis;
            //         }

            //     }


            //     var coba = $('input#kode_produk').val(kodejenis);
            // });


            // });



    });
</script>
    
