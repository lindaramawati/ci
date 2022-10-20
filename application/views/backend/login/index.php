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
    <div class="input-group mb-3">
      <input type="text" name="username" class="form-control" placeholder="Username">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" name="password" class="form-control" placeholder="Password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
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
  <p class="mb-1">
    <a href="forgot-password.html">Lupa Password</a>
  </p>
  <p class="mb-0">
    <a href="register.html" class="text-center">Registrasi</a>
  </p>
</div>
<!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->