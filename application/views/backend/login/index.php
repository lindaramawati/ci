<!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Login Terlebih Dahulu sebelum Memasuki Aplikasi</p>
    <?php
    $info = $this->session->flashdata('info');
    if(!empty($info)){
      echo $info;
    }
    ?>
    <form action="<?php echo site_url('login/ceklogin') ?>" method="post">
    <label for="username">Username<label>
    <div class="input-group mb-3">
      <input type="text" name="username" class="form-control" placeholder="Username">
      <div class="input-group-append">
        <div class="input-group-text"></div>
      </div>
    </div>
    <label for="password">Password</label>
    <div class="input-group mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <div class="input-group-append">
        <div class="input-group-text"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-8">
        <div class="icheck-primary">
          <input type="checkbox" id="remember">
          <label for="remember">Remember Me</label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
</div>
<!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->