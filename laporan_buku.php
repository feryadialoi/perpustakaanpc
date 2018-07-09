<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'function.php';
include 'koneksi.php';
// $mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

$html = '
<body style="font-family:arial;">
<H2 align="center">Sekolah Pelita Cemerlang</H2>
<p align="center"><strong>Jl. Perdana no. 18 Pontianak Tenggara<br>
Laporan Data Buku</strong></p>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>ISBN</th>
      <th>Jumlah Buku</th>
      <th>Lokasi</th>
      <th>Tanggal Input</th>
    </tr>
  </thead>
  <tbody>'.

  $no = 1;
  // $sql = $conn -> query("SELECT * FROM tb_transaksi WHERE tgl_pinjam BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()");
  $sql = $conn -> query("SELECT * FROM tb_buku");
  while ($data= $sql-> fetch_assoc()){
    $html .=
    '<tr>
      <td>'. $no++ .'</td>
      <td>'. $data["judul"] .'</td>
      <td>'. $data["pengarang"] .'</td>
      <td>'. $data["penerbit"] .'</td>
      <td>'. $data["tahun_terbit"] .'</td>
      <td>'. $data["isbn"] .'</td>
      <td>'. $data["jumlah_buku"] .'</td>
      <td>'. $data["lokasi"] .'</td>
      <td>'. $data["tgl_input"] .'</td>
    </tr>';
  }
  $html .= '</tbody>
</table>
</body>
';

$mpdf->WriteHTML($html);

$mpdf->Output('laporan.pdf', \Mpdf\Output\Destination::INLINE);
?>
