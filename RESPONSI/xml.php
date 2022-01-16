<?php
include "koneksi.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM data_pasien";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<data_pasien>";
 echo"<nomor>",$data['nomor'],"</nomor>";
 echo"<nama>",$data['nama'],"</nama>";
 echo"<ttl>",$data['ttl'],"</ttl>";
 echo"<alamat>",$data['temting'],"</alamat>";
 echo"<hasil>",$data['hasil'],"</hasil>";
 echo"<tindakan>",$data['tindakan'],"</tindakan>";
 echo"<tgl_periksa>",$data['tgl_periksa'],"</tgl_periksa>";
 echo"<pemeriksa>",$data['dokter'],"</pemeriksa>";
 echo "</data_pasien>";
}
echo "</data>";
?>
