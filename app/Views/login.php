<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toko Emas Harmonis</title>
  <link rel="icon" type="image/x-icon" href="<?= base_url('public') ?>/harmonis.ico">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?= base_url() ?>" class="h2">Toko Emas <b>Harmonis 1</b></a>
        <img src="<?= base_url('AdminLTE') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
          class="img-circle img-thumbnail">
      </div>
      <div class="card-body">
        <p class="login-box-msg">Login untuk akses kasir</p>

        <!-- Notifikasi Login -->
        <?php
        $errors = session()->getFlashdata('errors');
        if (!empty($errors)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <ul>
              <?php foreach ($errors as $key => $error) { ?>
                <li>
                  <?= esc($error) ?>
                </li>
              <?php } ?>
            </ul>
          </div>
        <?php } ?>
        <!-- End of Notifikasi Login -->

        <!-- Notifikasi Login Email/Password -->
        <?php
        //Login Berhasil
        if (session()->getFlashdata('logout')) {
          echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
            <i class="icon fas fa-times-circle"></i>';
          echo session()->getFlashdata('logout');
          echo '</div>';
        }
        //Login Gagal
        if (session()->getFlashdata('pesan')) {
          echo '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
            <i class="icon fas fa-times-circle"></i>';
          echo session()->getFlashdata('pesan');
          echo '</div>';
        }
        ?>
        <!-- End of Notifikasi Salah Email/Password -->
        <?php echo form_open('Home/CekLogin') ?>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
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
              <label for="remember">
                Ingat Saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
        <?php form_close() ?>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('AdminLTE') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>