<!-- ini page hapus buku
<div class="float-tombol">
  <a class="btn btn-primary" href="?page=buku">Kembali</a>
</div> -->
<<?php
  $id = $_GET['id'];
  $conn->query("delete from tb_buku where id ='$id'");
?>

<script type="text/javascript">
  alert("Data Berhasil Dihapus!")
  window.location.href="?page=buku";
</script>
