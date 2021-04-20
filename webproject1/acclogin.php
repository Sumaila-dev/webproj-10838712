<?php include('connector.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="acclogin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label><b>Username</b></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label><b>Password</b></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="member">
  		want to join us? <a href="accregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>