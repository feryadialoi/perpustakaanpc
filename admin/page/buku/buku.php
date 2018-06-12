<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px">Tambah Buku</a>
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
              <input class="form-control" id="bukuRecord">
            </div>
          </strong>
        </div> -->

        <div class="panel-body">
          <div class="table-responsive" id="container-table-buku">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Pengarang(s)</th>
                  <th>Penerbit</th>
                  <th>ISBN(Kode Buku)</th>
                  <th>Jumlah Buku</th>
                  <th>Aksi </th>
                </tr>
              </thead>
                <!-- fetching item dari database ke form -->
              <tbody>
                  <?php
                    $no = 1;
                    $sql = $koneksi -> query("select*from tb_buku");
                    while ($data= $sql-> fetch_assoc()){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['judul'];?></td>
                    <td><?php echo $data['pengarang'];?></td>
                    <td><?php echo $data['penerbit'];?></td>
                    <td><?php echo $data['isbn'];?></td>
                    <td><?php echo $data['jumlah_buku'];?></td>
                    <td>
                      <a href="?page=buku&aksi=edit&id=<?php echo $data['id'];?>" class="btn btn-info">Edit</a>
                      <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Buku Berikut?')" href="?page=buku&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger">Delete</a>
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
          $res = mysqli_query($conn,"SELECT * FROM tb_buku");
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
<script src="../assets/js/ajax/ajaxBuku.js"></script>
