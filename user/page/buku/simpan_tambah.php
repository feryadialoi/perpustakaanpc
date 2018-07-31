<?php
  $conn = mysqli_connect('localhost','root','','db_perpustakaanpc');
  $isbn = $_REQUEST['isbn'];
  $judul = $_REQUEST['judul'];
  $pengarang = $_REQUEST['pengarang'];
  $penerbit = $_REQUEST['penerbit'];
  $tahun_Terbit = $_REQUEST['tahun_terbit'];
  $jumlah_buku = $_REQUEST['jumlah_buku'];
  $lokasi = $_REQUEST['lokasi'];
  $conn->query("insert into tb_buku (isbn,judul,pengarang,penerbit,tahun_terbit,jumlah_buku,lokasi)
  values('$isbn','$judul','$pengarang','$penerbit','$tahun_Terbit','$jumlah_buku','$lokasi')");
?>
