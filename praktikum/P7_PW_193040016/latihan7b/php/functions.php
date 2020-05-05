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

function cari($keyword)
{
	$query = "SELECT * FROM elektronik
						WHERE 
						nama LIKE '%$keyword%' OR
						panel LIKE '%$keyword%' OR
						ukuran LIKE '%$keyword%' OR
						resolusi LIKE '%$keyword%' OR
						harga LIKE '%$keyword%'
						";

	return query($query);
}

function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	// cek username sudah ada atau tidak
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
						alert('Username sudah digunakan!');
					</script>";
		return false;
	}

	// enkripsi password 
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user baru
	$query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}
