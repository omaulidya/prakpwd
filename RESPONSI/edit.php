<?php
include_once("koneksi.php");
if(isset($_POST['update']))
{ 
	$nomor = $_POST['nomor'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$alamat = $_POST['temting'];
	$hasil = $_POST['hasil'];
	$tindakan = $_POST['tindakan'];
	$tgl = $_POST['tgl_periksa'];
	$dokter = $_POST['dokter'];
	$result = mysqli_query($con, "UPDATE data_pasien SET nama='$nama',ttl='$ttl',temting='$alamat',hasil='$hasil',tindakan='$tindakan',tgl_periksa='$tgl' WHERE nomor='$nomor'");
	header("Location: admin.php");
}
?>
<?php

$nomor = $_GET['nomor'];
$result = mysqli_query($con, "SELECT * FROM data_pasien WHERE nomor='$nomor'");
while($user_data = mysqli_fetch_array($result))
	{
		$nomor = $user_data['nomor'];
		$nama =$user_data['nama'];
		$ttl = $user_data['ttl'];
		$alamat = $user_data['temting'];
		$hasil = $user_data['hasil'];
		$tindakan =$user_data['tindakan'];
		$tgl = $user_data['tgl_periksa'];
		$dokter = $user_data['dokter'];
	}
	?>
	<html>
	<head>
		<title>Edit Data Pasien</title>
		<link rel="stylesheet" type="text/css" href="csss/style.css">
	</head>
	<body>
		<br/><br/>
		<div class="center">
			<h1>EDIT DATA</h1>
		<form name="form1" method="post" action="edit.php">
			<table border="0">
				<div class="txt_field">
				<tr> 
					<td>Nama</td>
					<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
				</tr>
			</div>
			<div class="txt_field">
				<tr> 
					<td>Tgl Lahir</td>
					<td><input type="date" name="ttl" value=<?php echo $ttl;?>></td>
				</tr>
			</div>
			<div class="txt_field">
				<tr> 
					<td>Alamat</td>
					<td><input type="text" name="temting" value=<?php echo $alamat;?>></td>
				</tr>
			</div>
			<div class="txt_field">
				<tr> 
					<td>Hasil Pemeriksaan</td>
					<td><input type="text" name="hasil" value=<?php echo $hasil;?>></td>
				</tr>
			</div>
			<div class="txt_field">
				<tr> 
					<td>Tindakan</td>
					<td><input type="text" name="tindakan" value=<?php echo $tindakan;?>></td>
				</tr>
			</div>
			<div class="txt_field">
				<tr> 
					<td>Tanggal Pemeriksaan</td>
					<td><input type="date" name="tgl_periksa" value=<?php echo $tgl;?>></td>
				</tr>
			</div>
			<div class="txt_field">
				<tr> 
					<td>Pemeriksa</td>
					<td><input type="text" name="dokter" value=<?php echo $dokter;?>></td>
				</tr>
			</div>
				<tr>
					<td><input type="hidden" name="nomor" value=<?php echo $_GET['nomor'];?>></td>
					<td><a href="admin.php">Kembali</a></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>
	</body>
	</html>