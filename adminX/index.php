<?php
  include '../koneksi.php';
  //mengaktifkan session_start
  session_start();

  //cek apakah user telah login, jika belum login maka di alihkan ke halaman Login
  if($_SESSION['status'] !="login") {
    header("location:../index.php");
  }

  //menampilkan pesan selamat datang
  echo "Hai, selamat datang ".$_SESSION['username'];
?>
<br>
<br>
<a href="logout.php">LOG OUT</a>
