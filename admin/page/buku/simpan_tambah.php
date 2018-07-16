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
  $conn->query("insert into tb_buku (judul,pengarang,penerbit,tahun_terbit,isbn,jumlah_buku,lokasi,tgl_Input)
  values('$judul','$pengarang','$penerbit','$tahun_Terbit','$isbn','$jumlah_buku','$lokasi','$tgl_Input')");
?>
