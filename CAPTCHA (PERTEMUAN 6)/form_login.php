<?php
echo "<h2>Login</h2>
<form method=post action=cek_login.php>";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
    <div class="global-container">
    	<div class="card login-form">
    		<div class="card-body">
    			<h1 class="card-title text-center">L O G I N</h1>
    	</div>
    	<div class="card-text">
    		<form>
  <div class="mb-3">
    <label for="exampleInputUsername1" class="form-label">Username</label>
    <input type="text" class="form-control" name="id_user">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3">
    <input type="text" name="captcha_code">
    <img src='captcha.php'/>
    <label class="form-captcha" for="exampleCheck1"></label>
  </div>
  <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary" value="LOGIN">Submit</button></div>
 
</form>
    	</div>
    </div>

  
  </body>
</html>