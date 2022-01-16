<?php 
include_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Pasien</title>
    <link rel="stylesheet" type="text/css" href="csss/style2.css">
  </head>
  <body>
 <ul class="bar" class="aktif">
  <li><a href=menu.html>Home</a><i class="fas fa-home"></i></li>
  <li><a href=admin.php>Data Pasien</a></li>
  <li><a href=create.php>Tambah Data</a><i class="fas fa-plus"></i></li>
  <li><a href=lap_data.php>Cetak</a><i class="fas fa-plus"></i></li>
  <li><a href=xml.php>XML</a><i class="fas fa-plus"></i></li>
  <li><a href=json.php>JSON</a><i class="fas fa-plus"></i></li>
  <li><a href="logout.php" onclick="return confirm('Yakin ingin logout?')"><input type="submit" value="Log Out"></a><i class="fas fa-plus"></i></li>
</ul>

<h3></h3>
<div class="center">
<form action="" method="get">
	<div class="txt_field">
<input type="text" name="cari"></div>
<input type="submit" value="Cari">
</form>
</div>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
<div class="siram">
<tr>
<th>No</th>
<th>Kode</th>
<th>Nama</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Hasil Pemeriksaan</th>
<th>Tindakan</th>
<th>Tanggal Pemeriksaan</th>
<th>Pemeriksa</th>
<th>Ket</th>
</tr>
<?php 
if(isset($_GET['cari']))
{
$cari = $_GET['cari'];
$sql="select * from data_pasien where nomor like'%".$cari."%'";
$tampil = mysqli_query($con,$sql);
}else{
$sql="select * from data_pasien";
$tampil = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['nomor']; ?></td>
<td><?php echo $r['nama']; ?></td>
<td><?php echo $r['ttl']; ?></td>
<td><?php echo $r['temting']; ?></td>
<td><?php echo $r['hasil']; ?></td>
<td><?php echo $r['tindakan']; ?></td>
<td><?php echo $r['tgl_periksa']; ?></td>
<td><?php echo $r['dokter']; ?></td>
<td><?php echo "<a href='edit.php?nomor=$r[nomor]'><input type='button' class='btn-edit'></a> | <a 
				href='delete.php?nomor=$r[nomor]'><input type='button' class='btn-delete'></a>" ?></td>
</tr>
</div>
<?php } ?>
</table>
</body>
</html>