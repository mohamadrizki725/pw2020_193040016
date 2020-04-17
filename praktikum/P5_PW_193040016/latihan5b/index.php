<?php 
// menghubungkan dengan file php lainnya 
require 'php/functions.php';

//melakukan query
$elektronik = query ("SELECT * FROM elektronik");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elektronik</title>
    <style>
        table{
            border : 1px solid black;

        }
        td, h2{
            text-align: center;
        }
        img{
            height: 250px;

        }
    </style>
</head>
<body>
        <h2>DATA HARGA ELEKTRONIK TV</h2>
        <table border="1" cellpadding="10" cellspacing="0" align="center">
            <tr>
                <th>NO</th>
                <th>FOTO</th>
                <th>NAMA</th>
                <th>PANEL</th>
                <th>UKURAN</th>
                <th>RESOLUSI</th>
                <th>HARGA (RP)</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($elektronik as $tv) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="asset/img/<?= $tv["foto"]; ?>"></td>
                <td><?= $tv["nama"] ?></td>
                <td><?= $tv["panel"] ?></td>
                <td><?= $tv["ukuran"] ?></td>
                <td><?= $tv["resolusi"] ?></td>
                <td><?= $tv["harga"] ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
            </tr>
        </table>
</body>