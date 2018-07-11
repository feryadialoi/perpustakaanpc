<!-- ini page hapus anggota
<div class="float-tombol">
  <a class="btn btn-primary" href="?page=anggota">Kembali</a>
</div>
hapus -->
<?php
// include '../koneksi.php';
  $conn = mysqli_connect('localhost','root','','perpustakaan');
  $nis = $_REQUEST['id'];
  // $nis = $_GET['id'];
  // $conn->query("delete from tb_anggota where nis ='$nis'");
  $conn->query("DELETE FROM tb_anggota WHERE nis ='".mysqli_escape_string($conn, $_POST['id'])."'");
?>

<!-- <script type="text/javascript">
  alert("Data Berhasil Dihapus!")
  window.location.href="?page=anggota";
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
