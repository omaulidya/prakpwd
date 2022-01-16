<?php 
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>RESPONSI PWD</title>
	<link rel="stylesheet" href="csss/main.css">
</head>

<body>
	<div class="center">
		<h1>Login</h1>
		<form method="post">
			<div class="txt_field">
				<label>Username</label>
				<input type="text" name="uname" required>
			</div>
			<div class="txt_field">
				<label>Password</label>
				<input type="password" name="pass" required>
			</div>
			<div class="txt_field">
				<input type="text" name="captcha_code" required>
				<img src='captcha.php'/>
				<label class="form-captcha" for="exampleCheck1"></label>
			</div>
			<div class="pass"><a href="#">Forgot Password?</a></div>
			<input type="submit" name="submit" value="Masuk">
			<div class="signup_link">
			</a>
			</div>
		</form>
<?php
if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$qry = mysqli_query($con,"SELECT * FROM login WHERE uname = '$uname' AND pass = '$pass'");
	$cek = mysqli_num_rows($qry);

	if($_POST["captcha_code"] == $_SESSION["captcha_code"]){
	
	if($cek==1)
	{
		echo"<script>alert('Anda berhasil Login!')</script>";
		$_SESSION['userweb']=$uname;
		header("location:menu.html");
		exit;
	}
	else
	{
		echo "<script>alert('Username atau Password atau Captcha yang anda masukkan salah')</script>";
	}
}
}
?>
</div>

</body>
</html>