<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="#" class="brand-link logo-switch">
  <img src="<?php echo base_url('assets/dist')?>/img/baa.png" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 40px">
  <span class="brand-text font-weight-light">CV Mandiri Asta Kencana</span>
</a>
  <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets')?>/image/mandiri.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/mitra') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Mitra
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a  class="nav-link">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Penjualan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/invoice') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/pesanan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/surat_jalan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Jalan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('admin/produk') ?>" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>