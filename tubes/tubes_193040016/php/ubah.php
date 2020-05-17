<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

//ambil id dari url 
$id = $_GET['id'];

// query laptop berdasarkan id
$lp = query("SELECT * FROM laptop WHERE id = $id")[0];

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {

  if (ubah($_POST) > 0) {
    echo "<script> 
             alert('Data Berhasil Di Update!');
             document.location.href = 'admin.php';
         </script>";
  } else {
    echo "<script>
            alert('Data Gagal Di Update!');
          </script>";
  }
}


?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="../css/ubah.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="js/sweetalert2.all.min.js"></script>
  <title>Form Update</title>
</head>

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $lp['id']; ?>">
    <div class="card"">
        <div class=" row">
      <div class="col m12 s12 center-align" style="padding-top: 20px;">
        <img src="../img/logo.png" width="100px;">
      </div>
    </div>
    <div class="row">
      <div class="col m6 s12" style="border-right: 2px solid #9E9E9E;">
        <ul>

          <div class="input-field">
            <i class="fas fa-laptop prefix"></i>
            <input type="text" name="nama" autofocus value="<?= $lp['nama']; ?>" autocomplete="off">
            <label for="">NAME :</label>
          </div>

          <div class="input-field">
            <i class="fas fa-microchip prefix"></i>
            <input type="text" name="cpu" value="<?= $lp['cpu']; ?>">
            <label for="">CPU :</label>
          </div>


          <div class="input-field">
            <i class="fas fa-memory prefix"></i>
            <input type="text" name="vga" value="<?= $lp['vga']; ?>">
            <label for="">VGA :</label>

          </div>

        </ul>
      </div>
      <div class="col m6 s12">
        <ul>

          <div class="input-field">
            <i class="fas fa-hdd prefix"></i>
            <input type="text" name="storage" value="<?= $lp['storage']; ?>">
            <label for="">STORAGE :</label>
          </div>


          <div class="input-field">
            <i class="fas fa-tv prefix"></i>
            <input type="text" name="layar" value="<?= $lp['layar']; ?>">
            <label for="">SCREEN :</label>
          </div>

          <div class="input-field">
            <i class="fas fa-dollar-sign prefix"></i>
            <input type="text" name="harga" value="<?= $lp['harga']; ?>">
            <label for="">PRICE : </label>
          </div>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col s12 center-align">

        <div class="input-field">
          <input type="file" name="gambar" required>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 center-align">
        <button type="submit" name="ubah" id="ubah" class="btn tombol-add" title="Add Product">Update</button>
      </div>
    </div>
    <div class="row">
      <div class="col m12 s12 center-align">
        <a href="admin.php" class="btn tombol-ubah">Cancel</a>
      </div>
    </div>
</div>
</form>
</div>

<body>

  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/admin.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="js/sweetalert2.all.min.js"></script>
</body>

</html>