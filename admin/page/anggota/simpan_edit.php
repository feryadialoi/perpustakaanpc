<?php
$conn = mysqli_connect('localhost','root','','db_perpustakaanpc');
 $nis = $_REQUEST['nis'];
 $nama = $_REQUEST['nama'];
 $tmp_lahir = $_REQUEST['tmp_lahir'];
 $tgl_lahir = $_REQUEST['tgl_lahir'];
 $jk = $_REQUEST['jk'];
 $tingkat = $_REQUEST['tingkat'];
 // $simpan = $_POST['simpan'];

 $conn->query("update tb_anggota set nis='$nis',nama='$nama',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jk='$jk',tingkat='$tingkat' where nis='$nis'");

?>
