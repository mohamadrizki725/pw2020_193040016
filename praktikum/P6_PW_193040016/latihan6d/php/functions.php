<?php
//functions untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "pw_193040016") or die("Database salah!");

	return $conn;
}

//functions untuk melakukan query ke database 
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data)
{
	$conn = koneksi();

	$foto = htmlspecialchars($data['foto']);
	$nama = htmlspecialchars($data['nama']);
	$panel = htmlspecialchars($data['panel']);
	$ukuran = htmlspecialchars($data['ukuran']);
	$resolusi = htmlspecialchars($data['resolusi']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO elektronik
									VALUE 
									('', '$foto', '$nama', '$panel', '$ukuran', '$resolusi','$harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();

	$id = $data['id'];
	$foto = htmlspecialchars($data['foto']);
	$nama = htmlspecialchars($data['nama']);
	$panel = htmlspecialchars($data['panel']);
	$ukuran = htmlspecialchars($data['ukuran']);
	$resolusi = htmlspecialchars($data['resolusi']);
	$harga = htmlspecialchars($data['harga']);

	$query = "UPDATE elektronik
						SET
						foto = '$foto',
						nama = '$nama',
						panel = '$panel',
						ukuran = '$ukuran',
						resolusi = '$resolusi',
						harga = '$harga'
						WHERE id = $id
					";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
