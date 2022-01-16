<?php
if(isset($_POST['Submit']))
{ 
	$nomor = $_POST['nomor'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$alamat = $_POST['temting'];
	$hasil = $_POST['hasil'];
	$tindakan = $_POST['tindakan'];
	$tgl = $_POST['tgl_periksa'];
	$dokter = $_POST['dokter'];

	include_once("koneksi.php");

	$result = mysqli_query($con,"INSERT INTO data_pasien(nomor,nama,ttl,temting,hasil,tindakan,tgl_periksa,dokter) VALUES('$nomor','$nama','$ttl','$alamat','$hasil','$tindakan','$tgl','$dokter')");
	header("location: admin.php?");
}
?>

<html>
<head>
 <title>Tambah Data Pasien</title>
 <link rel="stylesheet" type="text/css" href="csss/style.css">
</head>
<body>

	<br/><br/>
	<div class="center">
		<h1>TAMBAH DATA</h1>
	<form action="create.php" method="post" name="form1">
			<div class="txt_field">
			<tr>
				<td>Kode</td>
				<td><input type="text" name="nomor"></td>
			</tr>
		</div>
		<div class="txt_field">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
		</div>
		<div class="txt_field">
			<tr> 
				<td>Tanggal Lahir</td>
				<td><input type="date" name="ttl"></td>
			</tr>
		</div>
		<div class="txt_field">
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="temting"></td>
			</tr>
		</div>
		<div class="txt_field">
			<tr> 
				<td>Hasil Pemeriksaan</td>
				<td><input type="text" name="hasil"></td>
			</tr>
		</div>
		<div class="txt_field">
			<tr> 
				<td>Tindakan</td>
				<td><input type="text" name="tindakan"></td>
			</tr>
		</div>
		<div class="txt_field">
			<tr> 
				<td>Tanggal Periksa</td>
				<td><input type="date" name="tgl_periksa"></td>
			</tr>
		</div>
		<div class="txt_field">
			<tr>
				<td>Pemeriksa</td>
				<td><input type="text" name="dokter"></td>
			</tr>
		</div>
			<tr>
				<td></td>
				<td><a href="admin.php">Kembali</a></td>
				<div class="anu">
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</div>
			</tr>
	</form>
</div>
</body>
</html>