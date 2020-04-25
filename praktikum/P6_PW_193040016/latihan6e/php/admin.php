<?php
// menghubungkan dengan php lain 
require 'functions.php';

// melakukan query 
$elektronik = query("SELECT * FROM elektronik");

// tombol cari ditekan
if (isset($_POST['cari'])) {
  $elektronik = Cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="../../latihan6a/css/admin.css">
</head>

<body>
  <h3>Halaman Admin</h3>
  <div class="kotak">
    <div class="add">
      <button><a href="tambah.php">Tambah Data</a></button>
    </div><br>

    <form action="" method="POST">
      <input type="text" name="keyword" autofocus size="40" placeholder="Masukan Keyword Pencarian...">
      <button type="submit" name="cari">Cari!</button>
    </form>
  </div><br>

  <table border="1px" cellpadding="13" cellspacing="0" align="center" style="text-align: center;">
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

    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="8">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($elektronik as $tv) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <button><a href="ubah.php?id=<?= $tv['id']; ?>">Ubah</a></button>
            <button><a href="hapus.php?id=<?= $tv['id']; ?>" onclick="return confirm('Hapus Data??')" style="text-decoration: none">Hapus</button></a>
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
    <?php endif; ?>
  </table>
</body>

</html>