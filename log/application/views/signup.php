<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.css" type="text/css">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="margin-left:2.9rem; margin-right:2.9rem;margin-top: 1rem;background-image: url('../img/template3.png');"></nav>
    
    <br>
    <br>
      <div class="container1 mx-auto">
        <h2><center>Sign Up</center></h2>
        <form class="" action="<?= base_url('signup')  ?>" method="post">
          <div class="data">
              <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
              <input autofocus type="text" name="nik" id = "nik" placeholder="NIK"><br>
          </div>
          <small class="text-danger"><?= form_error('nik'); ?></small>
          <div class="data">
              <img src="<?php echo base_url() ?>/assets/img/account.png" alt="">
              <input type="text" name="username" id = "username" placeholder="Username"><br>
          </div>
          <small class="text-danger"><?= form_error('username'); ?></small>
          <div class="data">
              <img src="<?php echo base_url() ?>/assets/img/password.png" alt="">
              <input type="password" name="password" id = "password" placeholder="Password"><br>
          </div>
          <small class="text-danger"><?= form_error('password'); ?></small>
          <div class="data">
              <img src="<?php echo base_url() ?>/assets/img/email.png" alt="">
              <input type="text" name="email" id = "email" placeholder="Email"><br>
          </div>
          <small class="text-danger"><?= form_error('email'); ?></small>
          <div class="data">
              <img src="<?php echo base_url() ?>/assets/img/kontak.png" alt="">
              <input type="text" name="kontak" id = "kontak" placeholder="Kontak Pribadi"><br>
          </div>
          <small class="text-danger"><?= form_error('kontak'); ?></small>
          <input class="button" type="submit" name="" value="Sign Up">
          <br>
          <br>
          <br>
          <p>If you already have an account, please <a href="<?= base_url('login');?>">login here.</a></p>
        </form>
      </div>
  </body>
</html>
