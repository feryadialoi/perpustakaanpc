<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'function.php';
include 'koneksi.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

$html = '
<body style="font-family:arial;">
<H2 align="center">Sekolah Pelita Cemerlang</H2>
<p align="center"><strong>Jl. Perdana no. 18 Pontianak Tenggara<br>
Laporan Peminjaman Berstatus Kembali</strong></p>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
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
    </tr>
  </thead>
  <tbody>'.

  $no = 1;
  $sql = $conn -> query("SELECT * FROM tb_peminjaman WHERE status = 'pinjam' AND tgl_pinjam BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()");
  while ($data= $sql-> fetch_assoc()){
    $html .=
    '<tr>
      <td>'. $no++ .'</td>
      <td>'. $data["judul"] .'</td>
      <td>'. $data["nis"] .'</td>
      <td>'. $data["nama"] .'</td>
      <td>'. $data["tgl_pinjam"] .'</td>
      <td>'. $data["tgl_kembali"] .'</td>
      <td>';

          $denda = 1000;
          $tgl_dateline = $data['tgl_kembali'];
          $tgl_kembali = date('Y-m-d');
          $lambat = terlambat($tgl_dateline, $tgl_kembali);
          $denda_a = $lambat * $denda;
          //atur keterlambatan pengembalian denda
          if($lambat>0){
            $html .= '<font color="red">'.$lambat.' hari<br>(Rp '.$denda_a.')</font>';
          }else{
            $html .= $lambat . ' Hari';
          }

      $html .= '</td>';

      $html .= '<td>'. $data["status"] .'</td>
    </tr>';
  }
  $html .= '</tbody>
</table>
';

$mpdf->WriteHTML($html);

$mpdf->Output('laporan.pdf', \Mpdf\Output\Destination::INLINE);
?>
