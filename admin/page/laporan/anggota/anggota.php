<h1>Laporan Data Anggota</h1>


<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-striped table-bordered" >
			<thead>
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Tingkat</th>
				</tr>
			</thead>
<?php
	$link = mysqli_connect("localhost", "root", "", "perpustakaan");


	$no = 1;
	$p = mysqli_query($link,"SELECT * FROM tb_anggota");

	while($data = mysqli_fetch_array($p)){
		echo"<tr>
				<td>$no</td>
				<td>$data[nis]</td>
				<td>$data[nama]</td>
				<td>$data[tmp_lahir]</td>
				<td>$data[tgl_lahir]</td>
				<td>$data[jk]</td>
				<td>$data[tingkat]</td>
			</tr>";
	$no++;
	}

?>
</table>
 <a href="page/laporan/anggota/print/pdf_mysql.php"><i class="material-icons">print</i> PRINT</a>
