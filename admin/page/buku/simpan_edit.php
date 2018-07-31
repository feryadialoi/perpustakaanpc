<?php
  $conn = mysqli_connect('localhost','root','','db_perpustakaanpc');
  $isbn = $_REQUEST['isbn'];
  $judul = $_REQUEST['judul'];
  $pengarang = $_REQUEST['pengarang'];
  $penerbit = $_REQUEST['penerbit'];
  $tahun_Terbit = $_REQUEST['tahun_terbit'];
  $jumlah_buku = $_REQUEST['jumlah_buku'];
  $lokasi = $_REQUEST['lokasi'];
  $conn->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun',
                          isbn='$isbn', jumlah_buku='$jumlah_buku', lokasi='$lokasi' where isbn='$isbn'");
?>
