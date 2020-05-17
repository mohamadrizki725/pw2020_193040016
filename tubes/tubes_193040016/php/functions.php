<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tubes_193040016');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika data satu  
  if (mysqli_num_rows($result) == 0) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{

  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yg dipilih
  if ($error == 4) {
    echo "<script>
            alert ('Pilih Gambar Terlebih Dahulu!');
          </script>";
    return false;
  }

  // cek ekstensi file 
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert ('Yang Anda Pilih Bukan Gambar!');
          </script>";
    return false;
  }

  // cek tipe file 
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert ('Yang Anda Pilih Bukan Gambar!');
          </script>";
    return false;
  }

  // ukuran file 
  // max 5mb == 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert ('Ukuran Gambar Terlalu Besar!');
          </script>";
    return false;
  }

  // lolos pengecekan
  // upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../img/laptop/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $cpu = htmlspecialchars($data['cpu']);
  $vga = htmlspecialchars($data['vga']);
  $storage = htmlspecialchars($data['storage']);
  $layar = htmlspecialchars($data['layar']);
  $harga = htmlspecialchars($data['harga']);

  // upload gambar 
  $gambar = upload();
  if (!$gambar) {
    return false;
  }


  $query = "INSERT INTO 
            laptop
            VALUES
            (null,'$nama','$cpu','$vga','$storage','$layar','$harga','$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM laptop WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $cpu = htmlspecialchars($data['cpu']);
  $vga = htmlspecialchars($data['vga']);
  $storage = htmlspecialchars($data['storage']);
  $layar = htmlspecialchars($data['layar']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE laptop SET
            nama = '$nama',
            cpu = '$cpu',
            vga = '$vga',
            storage = '$storage',
            layar = '$layar',
            harga = '$harga',
            gambar = '$gambar'
            WHERE id = $id
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM laptop 
            WHERE 
            nama LIKE '%$keyword%' OR 
            vga LIKE '%$keyword%' OR
            cpu LIKE '%$keyword%' OR
            storage LIKE '%$keyword%' OR
            layar LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {

    // cek pasword
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: admin.php");
      exit;
    }
    $_SESSION['login'] = true;

    header("Location: admin.php");
    exit;
  }
  return [
    'error' => true,
    'pesan' => 'Incorrect username or password'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);


  // jika username dan password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
        alert('Username And Password cannot be empty!');
        document.location.href = 'registrasi.php';
      </script>";

    return false;
  }

  // jika username sudah ada

  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('Account already registered!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
            alert('Password and password confirmation do not match!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika password lebih < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
            alert('password is too short!');
            document.location.href = 'registrasi.php';
          </script>";
  }

  // jika password dan password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user VALUES
            (null, '$username', '$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
