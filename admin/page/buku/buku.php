<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px"><i class="material-icons md-18">add</i> Tambah Buku</a>
<div class="row">
  <div class="col-md-12">
    <!-- Table data buku -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h1>Data Buku</h1>
        </div>

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
                    $sql = $conn -> query("SELECT * FROM tb_buku");
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
                      <a href="?page=buku&aksi=edit&id=<?php echo $data['id'];?>" class="btn btn-primary"><i class="material-icons md-18">edit</i> Edit</a>
                      <!-- <button class="btn btn-danger" onclick="document.getElementById('modalHapusBuku').style.display='block'" ><i class="material-icons md-18">delete</i> Delete</button> -->
                      <!-- default -->
                      <!-- <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Buku Berikut?')" href="?page=buku&aksi=hapus&id=<?php echo $data['id'];?>" class="btn btn-danger"><i class="material-icons md-18">delete</i> Delete</a> -->

                      <!-- testing -->
                      <a class="btn btn-danger hapus_data_buku" data-id="<?php echo $data['id']; ?>" href="javascript:void(0)"><i class="material-icons md-18">delete</i> Hapus</a>

                    </td>
                  </tr>


                  <?php } ?>
                </tbody>
              </table>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- <script src="../assets/js/ajax/ajaxBuku.js"></script> -->
