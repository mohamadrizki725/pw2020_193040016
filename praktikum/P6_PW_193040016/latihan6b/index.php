<?php
// menghubungkan dengan file php lainnya 
require 'php/functions.php';

//melakukan query
$elektronik = query("SELECT * FROM elektronik");

?>
<!DOCTYPE html>

<head>
    <title>Elektronik</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

    <div class="container">
        <div class="bulat">
           <h3>DAFTAR HARGA TV ELEKTRONIK</h3>
         
            <?php foreach ($elektronik as $tv) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $tv['id'] ?>"> <?= $tv["nama"] ?> </a>
                </p>
            <?php endforeach; ?>
        </div>
        <div class="list">
        </div>
       
    </div>

</body>