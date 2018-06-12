<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px">Tambah Anggota</a>
<div class="row">
  <div class="col-md-12">
      <!-- Table data anggota -->
      <div class="panel panel-default">
          <div class="panel-heading">
               Data Anggota
          </div>
          <!-- <div class="form-page form-group">
            <strong>
              <label for="select-record" class="col-sm-1 col-form-label">Show record:</label>
              <div class="col-sm-2">

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
                <!-- <script>
                $(document).ready(function(){
                    $("#selectRecord").change(function(){
                        var nilai = $(this).val();
                        alert("nilai yang dipilih : " + nilai);
                    });
                });
                </script> -->
                <!-- <select style="height:34px;" class="form-control" id="selectRecord" name="select-record" onchange="showRecordCount(this.value)">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select>
              </div>
              <div class="col-sm-6"></div>
              <label for="search-record" class="col-sm-1 col-form-label">Search :</label>
              <div class="col-sm-2">
                <input class="form-control" id="anggotaRecord">
              </div>
            </strong>
          </div> -->

          <div class="panel-body">
              <div class="table-responsive" id="container-table-anggota">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nomor Induk Sekolah</th>
                              <th>Nama</th>
                              <th>Tempat Lahir</th>
                              <th>Tanggal Lahir</th>
                              <th>Jenis Kelamin</th>
                              <th>Tingkat</th>
                              <th>Aksi </th>
                          </tr>
                      </thead>
                      <!-- fetching item dari database ke form -->
                      <tbody>

                        <?php
                        $no = 1;
                        // $query = "SELECT * FROM tb_anggota WHERE nis LIKE '%o%' OR nama LIKE '%o%' OR tmp_lahir LIKE '%o%' OR tgl_lahir LIKE '%o%' OR jk LIKE '%o%' OR tingkat LIKE '%o%'";
                        $query = "SELECT * FROM tb_anggota";
                        // $sql = $koneksi -> query("select*from tb_anggota");
                        $sql = $koneksi -> query($query);
                        while ($data= $sql-> fetch_assoc()){
                        $jk = ($data['jk']=='l')?"Laki - Laki":"Perempuan";
                        ?>

                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['nis'];?></td>
                          <td><?php echo $data['nama'];?></td>
                          <td><?php echo $data['tmp_lahir'];?></td>
                          <td><?php echo $data['tgl_lahir'];?></td>
                          <td><?php echo $jk;?></td>
                          <td><?php echo $data['tingkat'];?></td>
                          <td>
                            <a href="?page=anggota&aksi=edit&id=<?php //echo $data['nis'];?>" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Anggota Berikut?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nis'];?>" class="btn btn-danger">Delete</a>
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
        $res = mysqli_query($conn,"SELECT * FROM tb_anggota");
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
<script src="../assets/js/ajax/ajaxAnggota.js"></script>
