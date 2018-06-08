<?php echo "ini page edit buku" ?>
<div class="float-tombol">
  <a class="btn btn-primary" href="?page=buku">Kembali</a>
</div>
<?php $id= $_GET['id'];
$sql = $koneksi->query("select * from tb_buku where id='$id'");

$tampil = $sql->fetch_assoc();

$tahun2 = $tampil['tahun_terbit'];
$lokasi = $tampil['lokasi'];
 ?>
<div class="panel panel-default">
<div class="panel-heading">
  Edit Data Buku
  </div>
<div class="panel-body">
                           <div class="row">
                               <div class="col-md-12">

                                   <form method="POST">
                                       <div class="form-group">
                                           <label>Judul Buku</label>
                                           <input class="form-control" name="judul" value="<?php echo $tampil['judul'];  ?>"/>

                                       </div>
                                       <div class="form-group">
                                           <label>Pengarang</label>
                                           <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang'];?>"/>

                                       </div>
                                       <div class="form-group">
                                           <label>Penerbit</label>
                                           <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit'];?>"/>

                                       </div>
                                       <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_Terbit">
                                              <?php
                                                  $tahun =date("Y");

                                                  for($i=$tahun-50;$i<= $tahun; $i++){
                                                    //echo'
                                                    if($i==$tahun2){
                                                    echo'  <option value="'.$i.'" selected>'.$i.'</option>';

                                                    }else{
                                                      echo'  <option value="'.$i.'">'.$i.'</option>';
                                                      }

                                                  //  ';
                                                  }

                                              ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn"/ value="<?php echo $tampil['isbn'];?>">

                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" name="jumlah_Buku"/ value="<?php echo $tampil['jumlah_buku'];?>">

                                        </div>
                                        <div class="form-group">
                                             <label>Lokasi Buku</label>
                                             <select class="form-control" name="lokasi">
                                                 <option value="rak1"<?php if ($lokasi== 'rak1') {echo "selected";}?>>Rak 1</option>
                                                 <option value="rak2"<?php if ($lokasi== 'rak2') {echo "selected";}?>>Rak 2</option>
                                                 <option value="rak3"<?php if ($lokasi== 'rak3') {echo "selected";}?>>Rak 3</option>
                                                 <option value="rak4"<?php if ($lokasi== 'rak4') {echo "selected";}?>>Rak 4</option>
                                                 <option value="rak5"<?php if ($lokasi== 'rak5') {echo "selected";}?>>Rak 5</option>
                                                 <option value="rak6"<?php if ($lokasi== 'rak6') {echo "selected";}?>>Rak 6</option>
                                                 <option value="rak7"<?php if ($lokasi== 'rak7') {echo "selected";}?>>Rak 7</option>
                                                 <option value="rak8"<?php if ($lokasi== 'rak8') {echo "selected";}?>>Rak 8</option>
                                                 <option value="rak9"<?php if ($lokasi== 'rak9') {echo "selected";}?>>Rak 9</option>
                                                 <option value="rak10"<?php if ($lokasi== 'rak10') {echo "selected";}?>>Rak 10</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label>Tanggal Input</label>
                                             <input class="form-control" name="tgl_Input" type="date" value="<?php echo $tampil['tgl_input'];?>"/>

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
 $judul = $_POST['judul'];
 $pengarang = $_POST['pengarang'];
 $penerbit = $_POST['penerbit'];
 $tahun_Terbit = $_POST['tahun_Terbit'];
 $isbn = $_POST['isbn'];
 $jumlah_buku = $_POST['jumlah_Buku'];
 $lokasi = $_POST['lokasi'];
 $tgl_Input = $_POST['tgl_Input'];
 $simpan = $_POST['simpan'];
 if($simpan){
   $sql = $koneksi->query("update tb_buku set judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun',
                          isbn='$isbn', jumlah_buku='$jumlah_buku', lokasi='$lokasi', tgl_input ='$tgl_Input' where id='$id'");
   if($sql){
 ?>
     <script type="text/javascript">
     alert("Perubahan Data Berhasil Disimpan!")
     // lempar ke buku.php
     window.location.href="?page=buku";
     </script>
     <?php
   }
 }


 ?>
