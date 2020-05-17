<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan
if (isset($_POST['tambah'])) {

  if (tambah($_POST) > 0) {
    echo "<script>
            alert ('Successfully entered new data');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Failed to enter new data!');
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
  <link rel="stylesheet" href="../css/tambah.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Form Add Catalog</title>
</head>

<body>
  <div class="container" style="margin-top: 30px;">

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="card">
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
                <input type="text" name="nama" autofocus required autocomplete="off">
                <label for="">NAME :</label>
              </div>

              <div class="input-field">
                <i class="fas fa-microchip prefix"></i>
                <input type="text" name="cpu" required>
                <label for="">CPU : </label>
              </div>

              <div class="input-field">
                <i class="fas fa-memory prefix"></i>
                <input type="text" name="vga" required>
                <label for="">VGA : </label>
              </div>

            </ul>
          </div>
          <div class="col m6 s12">
            <ul>

              <div class="input-field">
                <i class="fas fa-hdd prefix"></i>
                <input type="text" name="storage" required>
                <label for="">STORAGE : </label>
              </div>

              <div class="input-field">
                <i class="fas fa-tv prefix"></i>
                <input type="text" name="layar" required>
                <label for="">SCREEN : </label>
              </div>

              <div class="input-field">
                <i class="fas fa-dollar-sign prefix"></i>
                <input type="text" name="harga" required>
                <label for="">PRICE : </label>
              </div>

            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col s12 center-align">
            <input type="file" name="gambar" required>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 center-align">
            <button type="submit" name="tambah" class="btn tombol-add" title="Add Product">Add</button>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 center-align">
            <button class="btn tombol-cancel" style="background-color: red; "><a href="admin.php" style="color: white;">Cancel</a></button>
          </div>
        </div>

    </form>
  </div>

  <body>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>

  </body>

</html>