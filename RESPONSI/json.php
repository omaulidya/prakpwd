<?php
include "koneksi.php";
$sql="select * from data_pasien order by nomor";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['nomor'] = $r['nomor'];
 $h['nama'] = $r['nama'];
 $h['ttl'] = $r['ttl'];
 $h['alamat'] = $r['temting'];
 $h['hasil'] = $r['hasil'];
 $h['tindakan'] = $r['tindakan'];
 $h['tgl_periksa'] = $r['tgl_periksa'];
 $h['pemeriksa'] = $r['dokter'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>