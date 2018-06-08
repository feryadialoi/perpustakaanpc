<!-- php code untuk session login mengecek status login start-->
<?php
  include '../koneksi.php';
  //mengaktifkan session_start
  session_start();
  //
  //cek apakah user telah login, jika belum login maka di alihkan ke halaman Login
  if($_SESSION['status'] !="login") {
    header("location:../index.php");
  }
?>
<!-- php code untuk session login mengecek status login end-->
<!DOCTYPE html>
<html>
<head>
  <title>Anggota - Perpustakaan Pelita Cemerlang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="shortcut icon" href="../assets/img/logo.png">
</head>
<body>
  <div id="mySidenav" class="sidenav tab">
    <!-- logo dan tagline start -->
    <div style="background:white;padding:10px;">
      <h2 class="admin" style="margin-left: 45px;">PETUGAS</h2>
      <img src="../assets/img/logo.png" alt="logo">
      <h2 style="margin-left: 16px;">Perpustakaan</h2>
    </div>
    <!-- logo dan tagline end -->
    <!-- menu sidenav start -->
    <a href="index.php">        <i class="material-icons">account_box</i> Anggota</a>
    <a href="buku.php">         <i class="material-icons">book</i> Buku</a>
    <a class="active" href="peminjaman.php">   <i class="material-icons">unarchive</i> Peminjaman</a>
    <a href="pengembalian.php"> <i class="material-icons">archive</i> Pengembalian</a>
    <a href="laporan.php">      <i class="material-icons">perm_device_information</i> Laporan</a>
    <!-- menu sidenav end -->
  </div>

  <div id="main" class="main">
    <!-- topbar menu start -->
    <div class="top-bar">
      <div class="hamburger">
        <button class="hamburger-button" onclick="toggleNav()"><i class="material-icons logout-button">menu</i></button>
      </div>
      <div class="top-bar-menu">
        <ul>
          <li><a href="">Senin, 28 Mei 2018</a></li>
        </ul>
      </div>
      <div id="logoutButton" class="hamburger hamburger-logout">
        <button class="hamburger-button" onclick="document.getElementById('modallogout').style.display='block'" ><i class="material-icons logout-button">exit_to_app</i> Logout</button>
      </div>
    </div>
    <!-- topbar menu end -->

    <!-- content dari menu start -->
    <div class="content">


    </div>
    <!-- content dari menu end -->
  </div>

<script>
// fungsi toggle menu bar buka tutup start
function toggleNav() {
  var x = document.getElementById("mySidenav");
  var y = document.getElementById("main");
  var z = document.getElementById('logoutButton');
  if (x.style.width === "0px" || y.style.width === "0px") {
      x.style.width = "250px";
      y.style.marginLeft = "250px";
      z.style.marginRight = "266px";
  } else{
      x.style.width = "0px";
      y.style.marginLeft = "0px";
      z.style.marginRight = "16px";
  }
}
// fungsi toggle menu bar buka tutup end
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<!-- modal start -->
<div id="modallogout" class="modal">

  <div class="modal-content animate" action="/action_page.php">
    <div class="head">
      <span onclick="document.getElementById('modallogout').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <h2>Logout</h2>
      <p>
        Apa anda yakin untuk keluar?
      </p>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <div class="logout-btn">
        <a href="logout.php" class="modala">Ya</a>
        <button type="button" onclick="document.getElementById('modallogout').style.display='none'" class="modalbtn">Tidak</button>
        <!-- <button type="button" onclick="document.getElementById('modallogout').style.display='none'" class="modalbtn">Tidak</button> -->
      </div>
    </div>
  </div>
</div>
<!-- modal end -->
</body>
</html>
