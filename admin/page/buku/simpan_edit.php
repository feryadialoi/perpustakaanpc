<?php
  $conn = mysqli_connect('localhost','root','','perpustakaan');
  $id = $_REQUEST['id'];
  $judul = $_REQUEST['judul'];
  $pengarang = $_REQUEST['pengarang'];
  $penerbit = $_REQUEST['penerbit'];
  $tahun_Terbit = $_REQUEST['tahun_terbit'];
  $isbn = $_REQUEST['isbn'];
  $jumlah_buku = $_REQUEST['jumlah_buku'];
  $lokasi = $_REQUEST['lokasi'];
  $tgl_Input = $_REQUEST['tgl_input'];
  $conn->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun',
                          isbn='$isbn', jumlah_buku='$jumlah_buku', lokasi='$lokasi', tgl_input ='$tgl_Input' where id='$id'");
?>
