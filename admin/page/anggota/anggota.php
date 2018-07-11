<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px"><i class="material-icons md-18">add</i> Tambah Anggota</a>
<div class="row">
  <div class="col-md-12">
      <!-- Table data anggota -->
      <div class="panel panel-default">
          <div class="panel-heading">
               Data Anggota
          </div>
          <div class="panel-body">
              <div class="table-responsive" id="container-table-anggota">
                  <!-- <table class="table table-striped table-bordered table-hover" id="dataTables-example"> -->
                  <form class="" action="" method="post">


                  <table class="table table-striped table-bordered table-hover" id="myTable">
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
                        $sql = $conn -> query($query);
                        while ($data= $sql-> fetch_assoc()){
                        $jk = ($data['jk']=='l')?"Laki - Laki":"Perempuan";


                        $power_id{$no} = $data['nis'];
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
                            <!-- <div class="Aksi"> -->
                              <a href="?page=anggota&aksi=edit&id=<?php echo $data['nis'];?>" class="btn btn-info"><i class="material-icons md-18">edit</i> Edit</a>
                              <!-- <button class="btn btn-danger" onclick="document.getElementById('modalHapusAnggota').style.display='block'" ><i class="material-icons md-18">delete</i> Delete</button> -->
                              <!-- <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Anggota Berikut?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nis'];?>" class="btn btn-danger"><i class="material-icons md-18">delete</i> Delete</a> -->

                              <!-- testing -->
                              <a class="btn btn-danger hapus_data_anggota" data-id="<?php echo $data['nis']; ?>" href="javascript:void(0)"><i class="material-icons md-18">delete</i> Delete</a>
                          </div>
                          </td>
                        </tr>

                      <?php } ?>
                      </tbody>
                    </table>
                    </form>
                    <?php
                      if (isset($_POST['btn_hapus'])) {
                        $_SESSION['power_id'] = $power_id{$no};
                      }
                    ?>
            </div>
      </div>
    </div>
  </div>
</div>
<!-- <script src="../assets/js/ajax/ajaxAnggota.js"></script> -->
