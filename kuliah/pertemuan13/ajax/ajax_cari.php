<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);

?>


<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <th colspan="4">
        <h3>Data mahasiswa tidak ditemukan!</h3>
      </th>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>

    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="60px"></td>

      <td>
        <?= $m['nama']; ?>
      </td>
      <td><a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a></td>

    </tr>
  <?php endforeach; ?>
</table>