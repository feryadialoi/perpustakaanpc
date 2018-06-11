<a class="btn btn-primary" style="margin-bottom: 10px" href="?page=transaksi">Kembali</a>

<div class="panel panel-default">
  <div class="panel-heading">
    Transaksi Peminjaman Buku
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" >
          <div class="form-group">
            <div class="form-group">
              <label>Nomor Induk Siswa</label>
              <input class="form-control" name="nis" id="nis"/>
            </div>
            <div class="form-group">
              <label>Nama Siswa</label>
              <input class="form-control" name="nama" id="nama"/>
            </div>
            <div class="form-group">
              <label>Nomor Buku</label>
              <input class="form-control" name="xxxxxxxx"/>
            </div>
            <div class="form-group">
              <label>Judul Buku</label>
              <input class="form-control" name="xxxxxxxxxxx"/>
            </div>
            <div class="form-group">
              <label>Tanggal Pinjam</label>
              <input class="form-control" name="tmp_lahir" type="date"/>
            </div>
            <div class="form-group">
              <label>Tanggal Pinjam</label>
              <input class="form-control" name="tmp_lahir" type="date"/>
            </div>
            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- entah kenapa tanggal inputnya tidak berjalan -->
<!-- problem solved tanggal bisa berjalan -->
<!-- sebelumnya gk jalan coz lupa tanda petik ('') wakwkwkkwkwkwk -->
<?php
 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $tmp_lahir = $_POST['tmp_lahir'];
 $tgl_lahir = $_POST['tgl_lahir'];
 $jk = $_POST['jk'];
 $tingkat = $_POST['tingkat'];
 $simpan = $_POST['simpan'];
  if($simpan){
    //$cek validasi data input ganda 'note kevin'
    $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE nis='$nis'"));
   if ($cek > 0){
   echo "<script>window.alert('NIS ini sudah terdaftar!')
   window.location='?page=anggota&aksi=tambah'</script>";
 }
    else{
      //koneksi ke db n save data yg sudah di cek 'note kevin'
    $sql = $koneksi->query("insert into tb_anggota (nis,nama,tmp_lahir,tgl_lahir,jk,tingkat)
    values('$nis','$nama','$tmp_lahir','$tgl_lahir','$jk','$tingkat')");
}

   if($sql){
 ?>
     <script type="text/javascript">
     alert("Data Berhasil Disimpan!")
     // lempar ke anggota.php
     window.location.href="?page=anggota";
     </script>
   	</div>


     <?php
   }
 }


 ?>
</body>
