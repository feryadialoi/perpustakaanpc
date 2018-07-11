<<<<<<< HEAD
<!-- ini page hapus buku
<div class="float-tombol">
  <a class="btn btn-primary" href="?page=buku">Kembali</a>
</div> -->
<<?php
  $id = $_GET['id'];
  $koneksi->query("delete from tb_buku where id ='$id'");
?>

<script type="text/javascript">
  alert("Data Berhasil Dihapus!")
  window.location.href="?page=buku";
</script>
=======
 <?php
  $conn = mysqli_connect('localhost','root','','perpustakaan');
  $id = $_GET['id'];
  // $conn->query("DELETE FROM tb_buku where id ='$id'");
  $conn->query("DELETE FROM tb_buku where id ='".mysqli_escape_string($conn, $_POST['id'])."'");
 ?>

 <!-- <script type="text/javascript">
   alert("Data Berhasil Dihapus!")
   window.location.href="?page=buku";
 </script> -->

 <script>
   $(document).ready(function(){

       bootbox.dialog({
         message: "Data Berhasil Dihapus!",
         title: "<i class='glyphicon glyphicon-trash'></i> Hapus",
         buttons: {
           success: {
             label: "OK",
             className: "btn-success",
             callback: function() {
             $('.bootbox').modal('hide');

              // window.location.href="?page=anggota";
             }
           }
         }
       });
     });
 </script>
>>>>>>> 90ed4b171cd93bf8331977b52350454f6ed9e35e
