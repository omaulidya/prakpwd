<?php
// Create database connection using config file
include_once("koneksi.php");
// Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>

<html>
<head>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>

	<body>
		<?php
		$nimErr = $namaErr = $jkelErr = $tgllhrErr = "";
		$nim = $nama = $alamat = $jkel = $website = $tgllhr = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if (empty($_POST["nim"]))
			{
				$nimErr = "NIM harus diisi";
			}
			else
			{
				$nim = test_input($_POST["nim"]);
			}
			
			if (empty($_POST["nama"]))
			{
				$namaErr = "Nama harus diisi";
			}
			else
			{
				$nama = test_input($_POST["nama"]);
			}
			
			
			if (empty($_POST["alamat"])) 
			{
				$alamat = "";
			}
			else
			{
				$alamat = test_input($_POST["alamat"]);
			}
			
			if (empty($_POST["jkel"]))
			{
				$jkelErr = "Jenis Kelamin harus di isi";
			}
			else
			{
				$jkel = test_input($_POST["jkel"]);
			}

			if (empty($_POST["tgllhr"]))
			{
				$tgllhrErr = "Tanggal Lahir harus dimasukan!";
			}
			else
			{
				$tgllhr = test_input($_POST["tgllhr"]);
			}
		}
		
		function test_input($data) 
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		?>

		<h2>Posting Komentar </h2>
		<p><span class = "error">* Harus Diisi.</span></p>
		<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>NIM:</td>
				<td><input type = "text" name = "nim">
				<span class = "error">* <?php echo $nimErr;?></span>
			</td>
		</tr>
		
		<tr>
			<td>Nama: </td>
			<td><input type = "text" name = "nama">
			<span class = "error">* <?php echo $namaErr;?></span></td>
		</tr>
		
				<tr>
				<td>Jenis Kelamin: </td>
				<td>
					<input type = "radio" name = "jkel" value = "L">Laki-Laki
					<input type = "radio" name = "jkel" value = "P">Perempuan
					<span class = "error">* <?php echo $jkelErr;?></span>
				</td>
			</tr>

		<tr>
			<td>Alamat: </td>
			<td>
				<textarea name = "alamat" rows = "5" cols = "40"></textarea></td>
			</tr>

			<tr>
			<td>Tanggal Lahir</td>
			<td>
				<input type="date" name="tgllhr">
				<span class="error">*<?php echo $tgllhrErr;?></span>
			</td>
		</tr>
			
			
			<td>
				<input type = "submit" name = "submit" value = "Submit"> 
			</td>
		</table>
	</form>


	<h2>Data yang anda isi:</h2>
	<table width='80%' border=1>
		<tr>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jenis Kel</th> 
			<th>Alamat</th> 
			<th>Tanggal Lahir</th>
		</tr>

		<?php
		echo"<tr>";
		echo "<td>".$nim."</td>";
		echo "<br>";

		echo "<td>".$nama."</td>";
		echo "<br>";

		echo "<td>".$jkel."</td>";
		echo "<br>";

		echo "<td>".$alamat."</td>";
		echo "<br>";
		
		echo "<td>".$tgllhr."</td>";

		$result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr);
		VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");
		?>
		</table>
	</body>
</html>