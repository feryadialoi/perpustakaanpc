<!-- ini page hapus anggota
<div class="float-tombol">
  <a class="btn btn-primary" href="?page=anggota">Kembali</a>
</div>
hapus -->
<<?php
  $nis = $_GET['id'];
  $conn->query("delete from tb_anggota where nis ='$nis'");
?>

<script type="text/javascript">
  alert("Data Berhasil Dihapus!")
  window.location.href="?page=anggota";
</script>
