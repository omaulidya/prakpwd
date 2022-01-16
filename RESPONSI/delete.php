<?php
include "koneksi.php";
$sql="delete from data_pasien where nomor = '$_GET[nomor]'";
mysqli_query($con, $sql);
 mysqli_close($conn);
header('location:admin.php');
?>