<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: php/login.php");
  exit;
}


require 'functions.php';

// koneksi 
$conn = mysqli_connect('localhost', 'root', '', 'tubes_193040016');

//query 
$result = mysqli_query($conn, "SELECT * FROM laptop");


// ubah ke array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


// tampung
$laptop = $rows;

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
  $laptop = cari($_POST['keyword']);
}



?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/admin.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Admin</title>

</head>

<body>

  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav>
      <div class="container">
        <div class="nav-wrapper">
          <a class="brand-logo scrollspy">
            <h5>Dashboard</h5>
          </a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">

            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect waves-light btn-small tombol-add" href="tambah.php"><i class="material-icons left">control_point</i>Add Catalog</a></li>
            <li><a class="waves-effect waves-light btn-small tombol-out" href="logout.php"><i class="material-icons left ">input</i>Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Search Input -->
  <section class="section section-search grey-text center ">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <a href="../index.php" target="_blank"><img src="../img/logo.png" class="rglogo scrollspy"></a>
        </div>
        <div class="col s12">

          <form action="" method="POST">

            <input type="text" name="keyword" id="keyword" class="white-text" placeholder="--- Masukan Keyword Pencarian ---" autofocus style="text-align: center;" autocomplete="off">
            <button type="submit" name="cari" id="btnCari" class="btn">Search</button>

          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Table -->
  <div class="container">
    <div id="bungkus">
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
              <td><?= $lp['layar']; ?> Inch</td>
              <td>Rp. <?= $lp['harga']; ?></td>

            </tr>
          <?php endforeach; ?><br>
          </tbody>
      </table>
    </div>
  </div>


  <!--JavaScript at end of body for optimized loading-->
  <script src="../js/admin.js"></script>

</body>

</html>