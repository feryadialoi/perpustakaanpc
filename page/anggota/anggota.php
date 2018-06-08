ini page anggota <br>
<!-- btn tambah anggota baru -->
<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px">Tambah Anggota</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Table data anggota -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
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
                                      $sql = $koneksi -> query("select*from tb_anggota");
                                      while ($data= $sql-> fetch_assoc()){

                                      $jk = ($data['jk']==l)?"Laki - Laki":"Perempuan";



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
                                          <a href="?page=anggota&aksi=edit&id=<?php echo $data['nis'];?>" class="btn btn-info">Edit</a>
                                          <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Buku Berikut?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nis'];?>" class="btn btn-danger">Delete</a>
                                        </td>
                                      </tr>


                                    <?php } ?>
                                    </tbody>
                          </div>
                  </div>

                </div>
            </div>
</div>
