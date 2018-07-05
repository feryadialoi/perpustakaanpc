<h1>Laporan Data Buku</h1>

<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-striped table-bordered" >
			<thead>
				<tr>
          <th>No</th>
        	<th>Judul</th>
        	<th>Pengarang</th>
        	<th>Penerbit</th>
        	<th>Tahun Terbit</th>
        	<th>Kode Buku (ISBN)</th>
        	<th>Jumlah Buku</th>
          <th>Lokasi</th>
          <th>Tanggal Input</th>
				</tr>
			</thead>
<?php
	$link = mysqli_connect("localhost", "root", "", "perpustakaan");


	$no = 1;
	$p = mysqli_query($link,"SELECT * FROM tb_buku");

	while($data = mysqli_fetch_array($p)){
		echo"<tr>
				<td>$no</td>
				<td>$data[judul]</td>
				<td>$data[pengarang]</td>
				<td>$data[penerbit]</td>
				<td>$data[tahun_terbit]</td>
				<td>$data[isbn]</td>
				<td>$data[jumlah_buku]</td>
        <td>$data[lokasi]</td>
        <td>$data[tgl_input]</td>
			</tr>";
	$no++;
	}

?>
</table>
 <a href="page/laporan/buku/print/pdf_mysql.php"><i class="material-icons">print</i> PRINT</a>
