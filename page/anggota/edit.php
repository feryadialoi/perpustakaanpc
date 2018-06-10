<!-- <div class="float-tombol">
  <a class="btn btn-primary" style="margin-bottom: 10px" href="?page=anggota">Kembali</a>
</div> -->
<a class="btn btn-primary" style="margin-bottom: 10px" href="?page=anggota">Kembali</a>
<?php

$nis= $_GET['id'];
$sql = $koneksi->query("select * from tb_anggota where nis='$nis'");

$tampil = $sql->fetch_assoc();
$jk_A=$tampil['jk'];
$tingkat_A=$tampil['tingkat'];

 ?>

 <div class="panel panel-default">
 <div class="panel-heading">
   Edit Data Anggota
   </div>
 <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST">
                                      <!-- NIS Sudah Baku jadi edit NIS di disable -->
                                        <div class="form-group">
                                            <label>Nomor Induk Siswa</label>
                                            <input class="form-control" name="nis" disabled value="<?php echo $tampil['nis'];  ?>"/>

                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama'];  ?>"/>

                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tmp_lahir" value="<?php echo $tampil['tmp_lahir'];  ?>"/>

                                        </div>
                                        <div class="form-group">
                                             <label>Tanggal Lahir</label>
                                             <input class="form-control" name="tgl_lahir" type="date" value="<?php echo $tampil['tgl_lahir'];  ?>"/>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                              <label>Jenis Kelamin</label>
                                              <select style="height:34px;" class="form-control" name="jk">
                                                  <option value="l"<?php if ($jk_A== 'l') {echo "selected";}?>>Laki - Laki</option>
                                                  <option value="p"<?php if ($jk_A== 'p') {echo "selected";}?>>Perempuan</option>
                                              </select>
                                          </div>


                                          <div class="form-group">
                                               <label>Tingkat</label>
                                               <select style="height:34px;" class="form-control" name="tingkat">
                                                   <option value="TK/PG"<?php if ($tingkat_A== 'TK/PG') {echo "selected";}?>>TK/PG</option>
                                                   <option value="SD"<?php if ($tingkat_A== 'SD') {echo "selected";}?>>SD</option>
                                                   <option value="SMP"<?php if ($tingkat_A== 'SMP') {echo "selected";}?>>SMP</option>
                                                   <option value="SMA"<?php if ($tingkat_A== 'SMA') {echo "selected";}?>>SMA</option>

                                               </select>
                                           </div>
                                          <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                          </div>
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
  //    $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_anggota WHERE nis='$nis'"));
  //   if ($cek > 0){
  //   echo "<script>window.alert('NIS ini sudah terdaftar!')
  //    window.location='?page=anggota&aksi=edit'</script>";
  // }
  //   else{
  //      //koneksi ke db n save data yg sudah di cek 'note kevin'
  //    // $sql = $koneksi->query("insert into tb_anggota (nis,nama,tmp_lahir,tgl_lahir,jk,tingkat)
  //    // values('$nis','$nama','$tmp_lahir','$tgl_lahir','$jk','$tingkat')");
  //    $sql = $koneksi->query("update tb_anggota set nis='$nis', nama='$nama', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir',
  //                           jk='$jk', tingkat='$tingkat' where nim='$nim'");
  // }
  $sql = $koneksi->query("update tb_anggota set nis='$nis',nama='$nama',tmp_lahir='$tmp_lahir',tgl_lahir='$tgl_lahir',jk='$jk',tingkat='$tingkat' where nis='$nis'");


    if($sql){
  ?>
      <script type="text/javascript">
      alert("Data Berhasil Diubah!")
      // lempar ke anggota.php
      window.location.href="?page=anggota";
      </script>

      <?php
    }
  }


  ?>
