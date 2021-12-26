<?php
$url = "https://ppostest10.000webhostapp.com/";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "NIM : " . $r->NIM . "<br />";
 echo "Nama : " . $r->Nama . "<br />";
 echo "kodemk : " . $r->kodemk . "<br />";
 echo "namamk : " . $r->namamk . "<br />";
 echo "nilai : " . $r->nilai . "<br />";
 echo "</p>";
}
