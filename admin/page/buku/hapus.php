<<?php
<<<<<<< HEAD
  $id = $_GET['id'];
  $conn->query("delete from tb_buku where id ='$id'");
?>
=======
$id = $_GET['id'];
$koneksi->query("delete from tb_buku where id ='$id'");
 ?>
>>>>>>> 1799c2e96067aa869ab8c1989a1df71ec006fe0d

 <script type="text/javascript">
 window.location.href="?page=buku";
 </script>
 
