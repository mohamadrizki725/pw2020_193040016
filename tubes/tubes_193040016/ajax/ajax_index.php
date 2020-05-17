<?php

require '../php/functions.php';

$laptop = cari($_GET['key']);
?>

<div class="row">
  <div class="col m4 s12"></div>
  <div class="col m4 s12">
    <?php if (empty($laptop)) : ?>
      <div class="card center-align">
        <i class="large material-icons" style="color: red;">error</i>
        <h5 style="color: red;">Data Tidak Ditemukan </h5>
      </div>
  </div>
<?php endif; ?>
</div>
<div class="col m3 s12"></div>

<?php foreach ($laptop as $lp) : ?>

  <div class="col m3 s12 center-align">
    <div class="card center-align">

      <div class="card-image responsive-image">
        <img src="img/laptop/<?= $lp['gambar']; ?>">
      </div>

      <div class="card-caption center-align">
        <h6><?= $lp['nama']; ?></h6><br>
        <a class="waves-effect btn-small tombol-detail" href="php/detail.php?id=<?= $lp['id']; ?>">Details</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>