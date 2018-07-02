<!-- tagline -->
  <p class="dashboard-text">Selamat Datang!</p>
  <p class="dashboard-text2">Di Halaman Pengelolaan Aplikasi Perpustakaan Sekolah Pelita Cemerlang</p>
<!-- menu dashboard start-->
<hr>
<div class="row">
  <div class="content-dash-item col-sm-12 col-xs-12 col-md-12 col-lg-4">
    <div class="dash-item col-sm-12 col-xs-12">
      <p>Jumlah Anggota :</p>
      <p>
        <?php
          $sql = "SELECT * FROM tb_anggota";
          $result = mysqli_query($conn,$sql);
          $rows = mysqli_num_rows($result);
          echo "<strong>".$rows." orang</strong>";
        ?>
      </p>
      <hr>
    </div>
    <!-- <a class="dash-item col-sm-12 col-xs-12" href="index.php"><i class="material-icons">dashboard</i> Dashboard</a> -->
  </div>
  <div class="content-dash-item col-sm-12 col-xs-12 col-md-12 col-lg-4">
    <div class="dash-item col-sm-12 col-xs-12">
      <p>Jumlah Judul Buku :</p>
      <p>
        <?php
        $sql = "SELECT judul FROM tb_buku";
          $result = mysqli_query($conn,$sql);
          $rows = mysqli_num_rows($result);
          echo "<strong>".$rows." buku</strong>";
        ?>
      </p>
      <hr>
    </div>
    <!-- <a class="dash-item col-sm-12 col-xs-12" href="?page=anggota"><i class="material-icons">account_box</i> Anggota</a> -->
  </div>
  <div class="content-dash-item col-sm-12 col-xs-12 col-md-12 col-lg-4">
    <div class="dash-item col-sm-12 col-xs-12">
      <p>Jumlah Pengunjung 30 Hari Terakhir :</p>
      <p>
        <?php
          $sql = "SELECT * FROM tb_transaksi WHERE tgl_pinjam BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()";
          $result = mysqli_query($conn,$sql);
          $rows = mysqli_num_rows($result);
          echo "<strong>".$rows." pengunjung</strong>";
        ?>
      </p>
      <hr>
    </div>
    <!-- <a class="dash-item col-sm-12 col-xs-12" href="?page=buku"><i class="material-icons">book</i> Buku</a> -->
  </div>
  <!-- <div class="content-dash-item col-sm-12 col-xs-12 col-md-6 col-lg-4">
    <a class="dash-item col-sm-12 col-xs-12" href="?page=transaksi"><i class="material-icons">event_note</i> Transaksi</a>
  </div> -->
  <!-- <div class="content-dash-item col-sm-12 col-xs-12 col-md-6 col-lg-4">
    <a class="dash-item col-sm-12 col-xs-12" href="?page=laporan"><i class="material-icons">perm_device_information</i> Laporan</a>
  </div> -->
  <!-- <div class="content-dash-item col-sm-12 col-xs-12 col-md-6 col-lg-4">
    <a class="dash-item col-sm-12 col-xs-12" href="?page=pengaturan"><i class="material-icons">settings</i> Pengaturan</a>
  </div> -->
</div>
<hr>
<!-- menu dashboard end -->

<?php include '../function.php'; ?>

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
     Data Peminjaman Buku 30 Hari Terakhir
   </div>
   <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Nomor Induk Siswa</th>
              <th>Nama</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Terlambat</th>
              <th>Status</th>
              <th>Aksi </th>
          </tr>
        </thead>
          <!-- fetching item dari database ke form -->
        <tbody>

            <?php
            $no = 1;
            $sql = $conn -> query("SELECT * FROM tb_transaksi WHERE tgl_pinjam BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()");
            while ($data= $sql-> fetch_assoc()){
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $data['judul'];?></td>
              <td><?php echo $data['nis'];?></td>
              <td><?php echo $data['nama'];?></td>
              <td><?php echo $data['tgl_pinjam'];?></td>
              <td><?php echo $data['tgl_kembali'];?></td>
              <td>
                <?php
                 $denda = 1000;
                 $tgl_dateline = $data['tgl_kembali'];
                  $tgl_kembali = date('Y-m-d');
              //   echo $tgl_dateline2;a
                 $lambat = terlambat($tgl_dateline, $tgl_kembali);
                 //echo $lambat;
                  $denda_a = $lambat * $denda;
              //atur keterlambatan pengembalian denda
                if($lambat>0){
                  echo "<font color='red'>$lambat hari<br>(Rp $denda_a)</font>";
                }else{
                  echo $lambat . "Hari";
                }
                ?>
              </td>
              <td><?php echo $data['status'];?></td>
              <td>
                 <a href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id'];?>&judul=<?php echo $data['judul']; ?>&lambat=<?php echo $lambat; ?>&tgl_kembali=<?php echo $data['tgl_kembali']; ?>" class="btn btn-info"><i class="material-icons md-18">next_week</i> Perpanjang</a>
                 <a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id'];?>&judul=<?php echo $data['judul']; ?>" class="btn btn-info"><i class="material-icons md-18">check</i> Kembalikan</a>
              </td>
          <?php } ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
