<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET["id"];
$tv = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {

  if (ubah($_POST) > 0) {
    echo "<script>
          alert ('Data berhasil diubah!');
          document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
      alert('Data Gagal diubah!');
      document.location.href = 'admin.php';
    </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../../latihan6b/css/tambah.css">
</head>

<body>
  <div class="kotak">
    <h3>Form Ubah Data Elektronik TV</h3>
    <form method="POST">
      <input type="hidden" name="id" id="id" value="<?= $tv['id']; ?>">
      <ul>
        <li>
          <label for="foto">Foto : </label><br>
          <input type="text" name="foto" id="foto" required value="<?= $tv['foto']; ?>">
        </li>
        <li>
          <label for="nama">Nama : </label><br>
          <input type="text" name="nama" id="nama" required value="<?= $tv['nama']; ?>"">
      </li>
      <li>
        <label for=" panel">Panel : </label><br>
          <select name="panel" id="panel" required value="<?= $tv['panel']; ?>">
            <option value="">----- Jenis Panel -----</option>
            <option value="IPS">IPS</option>
            <option value="LCD">LCD</option>
            <option value="AMOLED">AMOLED</option>
            <option value="LED">LED</option>
          </select>
        </li>
        <li>
          <label for="ukuran">Ukuran : </label><br>
          <input type="text" name="ukuran" id="ukuran" required value="<?= $tv['ukuran']; ?>">
        </li>
        <li>
          <label for="resolusi">Resolusi : </label><br>
          <select name="resolusi" id="resolusi" required value="<?= $tv['resolusi']; ?>">
            <option value="">----- Resolusi Layar ----</option>
            <option value="720p">720p</option>
            <option value="1080p">1080p</option>
            <option value="1440p">1440p</option>
            <option value="2160p">2160p</option>
          </select>
        </li>
        <li>
          <label for="harga">Harga : </label><br>
          <input type="text" name="harga" id="harga" required value="<?= $tv['harga']; ?>">
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
          <a href="admin.php" style="text-decoration: none; color:black;">Kembali</a>
        </button>
      </ul>
    </form>
  </div>
</body>

</html>