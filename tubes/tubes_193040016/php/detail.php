<?php

require 'functions.php';

$id = $_GET['id'];

$laptop = query("SELECT * FROM laptop WHERE id = $id")[0];

?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <link rel="stylesheet" href="../css/detail.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Details</title>


</head>

<body>
  <div class="container">

    <a href="../index.php" class="btn-small back-menu">Back To Menu</a>
    <div class="card" style="margin-top: 10px;">

      <div class="row">
        <div class="col m6 s12">
          <div class="card-image responsive-image" ; style="padding: 50px">
            <img src="../img/laptop/<?= $laptop['gambar']; ?>" style="width: 400px;">
            <div>
              <h4 style="text-align: center; margin-top: 40px;"><?= $laptop['nama']; ?></h4>
            </div>
          </div>
        </div>
        <div class="col m6 s12">
          <table>
            <thead>
              <h4>SPECIFICATION</h4>
            </thead>
            <thead>
              <tr>
                <th>CPU</th>
                <td><?= $laptop['cpu']; ?></td>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>VGA</th>
                <td><?= $laptop['vga']; ?></td>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>STORAGE</th>
                <td><?= $laptop['storage']; ?></td>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>SCREEN</th>
                <td><?= $laptop['layar']; ?> Inch</td>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>PRICE</th>
                <th>
                  <b>Rp. <?= $laptop['harga']; ?></b>
                </th>
              </tr>
            </thead>
            <thead>
              <tr>
                <td colspan="2" class="center-align">

                  <a href="https://www.tokopedia.com/" target="_blank" class="tombol-buy btn"> <i class="material-icons prefix" style="line-height: 50px;">add_shopping_cart</i></a>
                </td>
              </tr>
            </thead>
          </table>


        </div>
      </div>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>