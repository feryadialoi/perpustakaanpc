<!-- page wrapper start-->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <!-- ISI DI SINI  -->
        <?php
        $page = isset($_GET['page']);
        $aksi = isset($_GET['aksi']);


        // halaman klik
        // page buku: tambah, edit, hapus
        if($page == "buku"){
          if (isset($_GET['aksi'])){
            if ($aksi=="tambah"){
              include "../page/buku/tambah.php";
            }
            elseif ($aksi=="edit"){
              include "../page/buku/edit.php";
            }
            elseif ($aksi=="hapus"){
              include "../page/buku/hapus.php";
            }
          }
          else {
            include "../page/buku/buku.php";
          }
        }
        // page transaksi: tambah
        elseif($page == "transaksi"){
          if (isset($_GET['aksi'])){
            if ($aksi=="peminjaman"){
              include "../page/transaksi/peminjaman.php";
            }
            elseif ($aksi=="pengembalian"){
              include "../page/transaksi/pengembalian.php";
            }
          }
          else {
            include "../page/transaksi/transaksi.php";
          }
        }
        // page anggota: tambah, edit, hapus
        elseif($page == "anggota"){
          if (isset($_GET['aksi'])){
            if ($aksi=="tambah"){
              include "../page/anggota/tambah.php";
            }
            elseif ($aksi=="edit"){
              include "../page/anggota/edit.php";
            }
          }
          else {
            include "../page/anggota/anggota.php";
          }
        }
        ?>
      </div>
      <!-- /. ROW  -->
      <hr />
    </div>
    <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
</div>
<!-- page wrapper end -->
