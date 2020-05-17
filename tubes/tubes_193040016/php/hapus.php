<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script> 
            alert('Data Berhasil Di Hapus!');
            document.location.href = 'admin.php';
       </script>";
} else {
  echo "<script>
          alert('Data Gagal Di Hapus!');
        </script>";
}
