<!-- btn tambah buku baru -->
<?php include '../function.php'; ?>
<a href="?page=transaksi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px">Tambah Transaksi</a>
<div class="row">
  <div class="col-md-12">
    <!-- Table data buku -->
  <div class="panel panel-default">
      <div class="panel-heading">
        Data Buku
      </div>
      <!-- <div class="form-page form-group">
        <strong>
          <label for="select-record" class="col-sm-1 col-form-label">Show record:</label>
          <div class="col-sm-2">
            <select style="height:34px;" class="form-control" id="select-record" placeholder="Email">
              <option value="">10</option>
              <option value="">25</option>
              <option value="">50</option>
              <option value="">100</option>
            </select>
          </div>
          <div class="col-sm-6"></div>
          <label for="search-record" class="col-sm-1 col-form-label">Search :</label>
          <div class="col-sm-2">
            <input class="form-control" id="transaksiRecord">
          </div>
        </strong>
      </div> -->
      <div class="panel-body">
        <div class="table-responsive" id="container-table-transaksi">
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
              $sql = $koneksi -> query("select*from tb_transaksi where status='pinjam'");
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
                      echo "
                      <font color='red'>$lambat hari<br>(Rp $denda_a)</font>


                      ";
                    }else{
                      echo $lambat . "Hari";
                    }
                    ?>
                  </td>
                  <td><?php echo $data['status'];?></td>
                  <td>
                    <a href="?page=anggota&aksi=edit&id=<?php echo $data['nim'];?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Buku Berikut?')" href="?page=transaksi&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>


              <?php } ?>
            </tbody>
          </table>
          </div>
        </div>


        <!-- pagination start-->
        <!-- <?php
          include '../koneksi.php';
          mysqli_select_db($conn,'perpustakaan');
          $res = mysqli_query($conn,"SELECT * FROM tb_transaksi");
          // while ($row=mysqli_fetch_array($res)) {
            // code...
            // echo $row["id"]." ".$roe["name"];
            // echo "<br>";
          // }

          $cou = mysqli_num_rows($res);
          echo "jumlah record : ".$cou."<br>";
          $cou = ceil($cou / 3);
          echo "jumlah halaman : ".$cou."<br>";

          echo '<nav style="text-align:center;">';
          echo '<ul class="pagination">';
            echo '<li class="page-item"><a class="page-link">prev</a></li>';
            for ($i=1; $i <= $cou; $i++) {
              print '<li class="page-item"><a class="page-link">'.$i.'</a></li>';
            }
            echo '<li class="page-item"><a class="page-link">next</a></li>';
          echo '</ul>';
          echo "</nav>";
        ?> -->
        <!-- pagination end -->



    </div>
  </div>
</div>
<script src="../assets/js/ajax/ajaxTransaksi.js"></script>
