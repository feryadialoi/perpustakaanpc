<!-- ini page hapus buku
<div class="float-tombol">
  <a class="btn btn-primary" href="?pageadmin=buku">Kembali</a>
</div> -->
<<?php
  $id = $_GET['id'];
  $koneksi->query("delete from tb_buku where id ='$id'");
?>

<script type="text/javascript">
  alert("Data Berhasil Dihapus!")
  window.location.href="?pageadmin=buku";
</script>
