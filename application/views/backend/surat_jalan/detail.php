<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          <?php foreach ($surat as $act) : ?>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">

                  <h4>
                    <i>To<br><?php echo $act->nama_mitra ?></i> </br>
                    
                    
                   
                    <!-- <small class="float-right">Date: <?php echo $act->tanggal_pengiriman ?></small> -->
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.col -->
              <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                  <address>
                    <strong><?php echo $act->alamat ?></strong><br>
                  </address>
                </div>
              <!-- info row -->
              
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>CV.Mandiri Asta Kencana</strong><br>
                    Jl. kamu nanyee<br>
                    Madiun, 9275<br>
                    Phone: (804) 123-5432<br>
                    Email: mandiriasta@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <!-- <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo $act->alamat_mitra ?></strong><br>
                    San Francisco, CA 94107<br>
                    Phone: (555) 539-1037<br>
                    Email: john.doe@example.com
                  </address>
                </div> -->
          
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                <strong>Id Invoice<?php echo $act->id ?></strong><br>
                  <br>
                  <!-- <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567 -->
                </div>
                <!-- /.col -->
              </div>
              
              <?php endforeach; ?>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama produk</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Jumlah</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pesanan as $item) : ?>
                      <tr>
                        <td>1</td>
                        <td><?php echo $item->nama_produk ?></td>
                        <td><?php echo $item->tanggal_pengiriman ?></td>
                        <td><?php echo $item->jumlah_pengiriman ?></td>
                        <td>$64.50</td>
                      </tr>
                        <?php endforeach; ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                
                <strong>Metode Pengiriman :<?php echo $act->metode_pengiriman ?></strong><br>
                <strong>Nomer Kendaraan :<?php echo $act->nomer_kendaraan ?></strong><br>
                  
                  <!-- <p class="lead">Payment Methods:</p>
                  <img src="<?php echo base_url('assets/dist/img')?>/credit/visa.png" alt="Visa">
                  <img src="<?php echo base_url('assets/dist/img')?>/credit/mastercard.png" alt="Mastercard">
                  <img src="<?php echo base_url('assets/dist/img')?>/credit/american-express.png" alt="American Express">
                  <img src="<?php echo base_url('assets/dist/img')?>/credit/paypal2.png" alt="Paypal"> -->
                </div> 
                <!-- /.col -->
                <!-- <div class="col-6">
                  <p class="lead">Amount Due 2/22/2014</p>
                </div> -->
                <div class="col-5">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <!-- <th style="margin-right: 10px;">Subtotal:</th>
                        <td>250.30</td> -->
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <!-- <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                  <!-- <a class="btn btn-primary" style="color: white"class="btn btn-primary float-right" style="margin-right: 5px;" href="<?php echo base_url('admin/invoice/printdetail') ?>">
                  <i class="fas fa-fw fa-print"></i> Print</a>
                </div> -->
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->