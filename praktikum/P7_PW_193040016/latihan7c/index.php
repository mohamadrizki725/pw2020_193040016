<?php
// menghubungkan dengan file php lainnya 
require 'php/functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

if (isset($_POST['cari'])) {
    $elektronik = Cari($_POST['keyword']);
}
?>
<!DOCTYPE html>

<head>
    <title>Elektronik</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
    <a href="php/login.php"> -->> Masuk ke halaman Admin <<-- </a> <div class="kotak">
            <form action="" method="POST">
                <input type="text" name="keyword" autofocus size="40" placeholder="Masukan Keyword Pencarian...">
                <button type="submit" name="cari">Cari!</button>
            </form>
            </div>

            <?php if (empty($elektronik)) : ?>
                <div class="cari">
                    <div class="cari2">
                        <h2>Data Tidak Ditemukan</h2>
                    </div>
                </div>
            <?php else : ?>
                <div class="container">
                    <div class="bulat">
                        <h3>DAFTAR HARGA TV ELEKTRONIK</h3>


                        <?php foreach ($elektronik as $tv) : ?>
                            <p class="nama">
                                <a href="php/detail.php?id=<?= $tv['id'] ?>"> <?= $tv["nama"] ?> </a>
                            </p>

                        <?php endforeach; ?><br><br>
                        <h2 style="color: white;">INDEX</h2>
                    <?php endif; ?>
                    </div>


                </div>

</body>