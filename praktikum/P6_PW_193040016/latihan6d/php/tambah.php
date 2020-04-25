<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
          alert ('Data berhasil ditambahkan!');
          document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
      alert('Data Gagal ditambahkan!');
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
    <h3>Form Tambah Data Elektronik TV</h3>
    <form action="" method="POST">
      <ul>
        <li>
          <label for="foto">Foto : </label><br>
          <input type="text" name="foto" id="foto" required>
        </li>
        <li>
          <label for="nama">Nama : </label><br>
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="panel">Panel : </label><br>
          <select name="panel" id="panel" required>
            <option value="">----- Jenis Panel -----</option>
            <option value="IPS">IPS</option>
            <option value="LCD">LCD</option>
            <option value="AMOLED">AMOLED</option>
            <option value="LED">LED</option>
          </select>
        </li>
        <li>
          <label for="ukuran">Ukuran : </label><br>
          <input type="text" name="ukuran" id="ukuran" required>
        </li>
        <li>
          <label for="resolusi">Resolusi : </label><br>
          <select name="resolusi" id="resolusi">
            <option value="">----- Resolusi Layar ----</option>
            <option value="720p">720p</option>
            <option value="1080p">1080p</option>
            <option value="1440p">1440p</option>
            <option value="2160p">2160p</option>
          </select>
        </li>
        <li>
          <label for="harga">Harga : </label><br>
          <input type="text" name="harga" id="harga" required>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
          <a href="admin.php" style="text-decoration: none; color:black;">Kembali</a>
        </button>
      </ul>
    </form>
  </div>
</body>

</html>