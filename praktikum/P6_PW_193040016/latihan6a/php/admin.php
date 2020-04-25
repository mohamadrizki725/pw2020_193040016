<?php
// menghubungkan dengan php lain 
require 'functions.php';

// melakukan query 
$elektronik = query("SELECT * FROM elektronik");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>
  <h3>Halaman Admin</h3>
  <table border="5px" cellpadding="13" cellspacing="0" align="center">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Panel</th>
      <th>Ukuran</th>
      <th>Resolusi</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($elektronik as $tv) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../asset/img/<?= $tv['foto']; ?>" width="100px"></td>
        <td><?= $tv['nama']; ?></td>
        <td><?= $tv['panel']; ?></td>
        <td><?= $tv['ukuran']; ?></td>
        <td><?= $tv['resolusi']; ?></td>
        <td><?= $tv['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>
</body>

</html>