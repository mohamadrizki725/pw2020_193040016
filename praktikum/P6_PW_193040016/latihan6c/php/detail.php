<?php
//mengecek apakah id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php

if (!isset($_GET['id'])) {
	header("location: ../index.php");
	exit;
}

require 'functions.php';

//mangambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$elektronik = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/detail.css">
</head>

<body>
	<div class="container">
		<div class="keterangan">
			<div class="gambar">
				<img src="../asset/img/<?= $elektronik["foto"]; ?>" alt="" width="300px">
			</div>
			<p><?= $elektronik["nama"]; ?></p>
			<p><?= $elektronik["panel"]; ?></p>
			<p><?= $elektronik["ukuran"]; ?></p>
			<p><?= $elektronik["resolusi"]; ?></p>
			<p><?= $elektronik["harga"]; ?></p>
			<button>
				<tombol class="tombol-kembali">
					<a href="../index.php">Kembali</a>
			</button>
		</div>
		<div class="bulat">
		</div>
	</div>
</body>

</html>