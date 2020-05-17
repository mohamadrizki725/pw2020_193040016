<?php

require '../php/functions.php';

$laptop = cari($_GET['key']);
?>

<table class="highlight responsive-table">
  <thead>
    <tr class="centered">
      <th>#</th>
      <th>Action</th>
      <th>Photo</th>
      <th>Name</th>
      <th>CPU</th>
      <th>VGA</th>
      <th>Storage</th>
      <th>Screen</th>
      <th>Price</th>
    </tr>
  </thead>
  <?php if (empty($laptop)) : ?>

    <tr>
      <th colspan="9" style="color: red; text-align:center;"> <i class="medium material-icons">error</i>
        <h5><b>Data Tidak Ditemukan</b></h5>
      </th>
    </tr>
  <?php endif; ?>

  <?php $i = 1;
  foreach ($laptop as $lp) : ?>
    <tbody>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href="hapus.php?id=<?= $lp['id']; ?>" onclick="return confirm('Apakah Anda Yakin?');" class="waves-effect waves-light btn-small tombol-del" title="Delete"><i class="small material-icons">delete</i></a>

          <a href="ubah.php?id=<?= $lp['id']; ?>" class="waves-effect waves-light btn-small tombol-up" title="Update"><i class="small material-icons">update</i></a></td>

        <td><img src="../img/laptop/<?= $lp['gambar']; ?>" style="width: 200px;"></td>
        <td><?= $lp['nama']; ?></td>
        <td><?= $lp['cpu']; ?></td>
        <td><?= $lp['vga']; ?></td>
        <td><?= $lp['storage']; ?></td>
        <td><?= $lp['layar']; ?></td>
        <td>Rp. <?= $lp['harga']; ?></td>

      </tr>
    <?php endforeach; ?><br>
    </tbody>
</table>