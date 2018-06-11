<!-- ini page hapus anggota
<div class="float-tombol">
  <a class="btn btn-primary" href="?pageadmin=anggota">Kembali</a>
</div>
hapus -->
<<?php
  $nis = $_GET['id'];
  $koneksi->query("delete from tb_anggota where nis ='$nis'");
?>

<script type="text/javascript">
  alert("Data Berhasil Dihapus!")
  window.location.href="?pageadmin=anggota";
</script>
