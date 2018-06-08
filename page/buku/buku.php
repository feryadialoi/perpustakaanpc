<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px">Tambah Buku</a>
<div class="row">
  <div class="col-md-12">
    <!-- Table data buku -->
    <div class="panel panel-default">
        <div class="panel-heading">
             Data Buku
        </div>
        <div class="panel-body">
          <!-- <div class="table-responsive"> -->
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
                    $sql = $koneksi -> query("select*from tb_buku limit 10");
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
          <!-- </div> -->
        </div>
    </div>
  </div>
</div>
