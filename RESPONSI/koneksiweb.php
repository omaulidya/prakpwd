<?php
$url = "https://responsiocha.000webhostapp.com/";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "KODE : " . $r->NIM . "<br />";
 echo "Nama : " . $r->Nama . "<br />";
 echo "TTL : " . $r->ttl . "<br />";
 echo "Alamat : " . $r->temting . "<br />";
 echo "Hasil : " . $r->hasil . "<br />";
 echo "Tindakan : " . $r->tindakan . "<br />";
 echo "Tgl_periksa : " . $r->tgl_periksa . "<br />";
  echo "Pemeriksa : " . $r->dokter . "<br />";
 echo "</p>";
}
