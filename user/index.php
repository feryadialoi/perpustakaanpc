<!-- php code untuk session login mengecek status login start-->
<?php
  include '../koneksi.php';
  //mengaktifkan session_start
  session_start();
  //
  //cek apakah user telah login, jika belum login maka di alihkan ke halaman Login
  if($_SESSION['status'] !="loginUser") {
    header("location:../index.php");
  }
  $koneksi = new mysqli ("localhost","root","","perpustakaan");
?>
<!-- php code untuk session login mengecek status login end-->



<!-- php code untuk session login mengecek status login end-->
<!DOCTYPE html>
<html>
<head>
  <title>Anggota - Perpustakaan Pelita Cemerlang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.ba.css">
  <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- TABLE STYLES-->
  <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" >
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/img/logo.png">
</head>
<body>
  <!-- topbar menu start -->
  <div class="top-bar">
    <div class="hamburger">
      <button class="hamburger-button" onclick="toggleNav()"><i class="material-icons logout-button">menu</i></button>
    </div>
    <div id="logoutButton" class="hamburger hamburger-logout">
      <button class="hamburger-button" onclick="document.getElementById('modallogout').style.display='block'" ><i class="material-icons logout-button">exit_to_app</i> Logout</button>
    </div>
    <div class="top-bar-menu">
      <?php
      date_default_timezone_set("Asia/Jakarta");
        function hari(){
            switch (date("N")) {
              case '1':
                $hari = "Senin";
                break;
              case '2':
                $hari = "Selasa";
                break;
              case '3':
                $hari = "Rabu";
                break;
              case '4':
                $hari = "Kamis";
                break;
              case '5':
                $hari = "Jumat";
                break;
              case '6':
                $hari = "Sabtu";
                break;
              case '7':
                $hari = "Minggu";
                break;
            }
            return($hari);
        }
        $tanggal = hari().", ". date("j M Y");
        echo $tanggal;
      ?>
    </div>
    <div class="top-bar-menu" style="color:yellow; padding-left:20px; font-size:14px;">
      <?php
        include '../koneksi.php';
        // session_start();
          $username = $_SESSION['username'];

        mysqli_select_db($conn,'perpustakaan');
        $result = mysqli_query($conn,"SELECT * FROM tbuser WHERE username = '$username'");

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            // echo "id: " . $row["id"]. " - Name: " . $row["nama"]."<br>";
            echo $row['nama'];
          }
        }

      ?>
    </div>
  </div>
  </div>
  <!-- topbar menu end -->
  <!-- sidenav start -->
  <div id="mySidenav" class="sidenav tab">
    <!-- logo dan tagline start -->
    <div style="background:white;padding:10px;">
      <h2 id="admin" class="admin">USER</h2>
      <center><img src="../assets/img/logo.png" style="width:230px;" alt="logo"></center>
      <h2 style="text-align: Center;">Perpustakaan</h2>
    </div>
    <!-- logo dan tagline end -->
    <!-- menu sidenav start -->
    <a href="index.php"><i class="material-icons">dashboard</i> Dashboard</a>
    <a href="?pageuser=anggota"><i class="material-icons">account_box</i> Anggota</a>
    <a href="?pageuser=buku"><i class="material-icons">book</i> Buku</a>
    <a href="?pageuser=peminjaman"><i class="material-icons">unarchive</i> Peminjaman</a>
    <a href="?pageuser=pengembalian"><i class="material-icons">archive</i> Pengembalian</a>
    <a href="?pageuser=laporan"><i class="material-icons">perm_device_information</i> Laporan</a>
    <a href="?pageuser=pengaturan"><i class="material-icons">settings</i> Pengaturan</a>
    <!-- menu sidenav end -->
  </div>
  <!-- sidenav end -->

  <!-- main start -->
  <div id="main" class="main">

    <div class="sub-main">
        <div class="content">
          <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $page = $_GET['pageuser'];
            $aksi = $_GET['aksi'];


            // halaman klik
            // page anggota: tambah, edit, hapus
            if($page == "anggota"){
              if (isset($_GET['aksi'])){
                if ($aksi=="tambah"){
                  include "../pageuser/anggota/tambah.php";
                }
                elseif ($aksi=="edit"){
                  include "../pageuser/anggota/edit.php";
                }
                elseif ($aksi=="hapus"){
                  include "../pageuser/anggota/hapus.php";
                }
                elseif ($aksi=="coba"){
                  include "../pageuser/anggota/coba.php";
                }
              }
              else {
                include "../pageuser/anggota/anggota.php";
              }
            }
            // page buku: tambah, edit, hapus
            elseif($page == "buku"){
              if (isset($_GET['aksi'])){
                if ($aksi=="tambah"){
                  include "../pageuser/buku/tambah.php";
                }
                elseif ($aksi=="edit"){
                  include "../pageuser/buku/edit.php";
                }
                elseif ($aksi=="hapus"){
                  include "../pageuser/buku/hapus.php";
                }
              }
              else {
                include "../pageuser/buku/buku.php";
              }
            }
            // page transaksi: tambah
            elseif($page == "transaksi"){
              if (isset($_GET['aksi'])){
                if ($aksi=="peminjaman"){
                  include "../pageuser/transaksi/peminjaman.php";
                }
                elseif ($aksi=="pengembalian"){
                  include "../pageuser/transaksi/pengembalian.php";
                }
              }
              // else {
              //   include "../page/transaksi/transaksi.php";
              // }
            }
            // page laporan:
            elseif($page == "laporan"){
              if (isset($_GET['laporan'])){
                if ($aksi=="laporan1"){
                  include "../pageuser/laporan1.php";
                }
              }
              else {
                include "../pageuser/laporan.php";
              }
            }
            // page pengaturan:
            elseif($page == "pengaturan"){
              if (isset($_GET['pengaturan'])){
                if ($aksi=="pengaturan"){
                  include "../pageuser/pengaturan1.php";
                }
              }
              else {
                include "../pageuser/pengaturan.php";
              }
            }
          ?>
        </div>

      </div>
  </div>
  <!-- main end -->


  <script>
  function toggleNav() {
    var x = document.getElementById("mySidenav");
    var y = document.getElementById("main");
    // var z = document.getElementById('logoutButton');
    if (x.style.width === "0px" || y.style.marginLeft === "0px") {
      // sidenav open
      // x.style.width = "250px";
      x.style.marginLeft = "0px";
      x.style.marginRight = "250px";
      y.style.marginLeft = "250px";
      // z.style.marginRight = "266px";
    } else{
      // sidenav close
      // x.style.width = "0px";
      x.style.marginLeft = "-250px";
      x.style.marginRight = "0px";
      y.style.marginLeft = "0px";
      // z.style.marginRight = "16px";
    }
  }
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

    <div class="container-modal">
      <!-- <div class="logout-btn"> -->
      <div class="logout-btn2">
        <a href="logout.php" class="btn btn-danger modalawidth">Ya</a>
        <button type="button" onclick="document.getElementById('modallogout').style.display='none'" class="btn btn-primary modalbtnwidth">Tidak</button>
      </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- modal end -->

<?php
  include '../koneksi.php';
  mysqli_select_db($conn,'perpustakaan');
  $res = mysqli_query($conn,"SELECT * FROM tb_buku");
  while ($row=mysqli_fetch_array($res)) {
    // code...
    // echo $row["id"]." ".$roe["name"];
    // echo "<br>";
  }


  $res1 = mysqli_query($conn,"SELECT * FROM tb_buku");
  $cou = mysqli_num_rows($res);
  // echo $cou;
?>

<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>

<script src="../assets/js/dataTables/jquery.dataTables.js"></script>
<script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
          $(document).ready(function () {
              $('#dataTables-example').dataTable();
          });
</script>
<script type="text/javascript">

    function stopRKey(evt) {
      var evt = (evt) ? evt : ((event) ? event : null);
      var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
      if ((evt.keyCode == 13) && (node.type=="text"))  {return false;}
    }

    document.onkeypress = stopRKey;

</script>
<!-- CUSTOM SCRIPTS -->
<script src="../assets/js/custom.js"></script>
</body>
</html>
