<?php
//koneksi ke database employee
$connection = 
mysqli_connect("localhost","id18181765_postest10","~*@1EE*xhk1#jET9","id18181765_akademik") or 
die("Error " . mysqli_error($connection));
//query ke table employee
$sql = "select * from khs where nim='MHS04'";
$result = mysqli_query($connection, $sql) or die("Error in 
Selecting " . mysqli_error($connection));
//pembuatan array
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
$emparray[] = $row;
}
//pembuatan json
echo json_encode($emparray);
//tutup koneksi
mysqli_close($connection);
?>