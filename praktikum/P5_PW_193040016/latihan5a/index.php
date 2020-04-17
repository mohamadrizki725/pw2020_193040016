<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

//memilih database
mysqli_select_db ($conn, "pw_193040016");

//query mengambil objek dari tabel didalam database
$result = mysqli_query ($conn, "SELECT * FROM elektronik");

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
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
            </tr>
        </table>
</body>

<!-- <br><br><a href="index.php" style="text-decoration: none;">Kembali ke Index</a> -->
</html>