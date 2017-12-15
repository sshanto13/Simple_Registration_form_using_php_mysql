<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
    <link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
<div class="registration_area">

	<form method="post" action="registration.php">
		<h2>Register Now!</h2>
		<!--display validation error -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>User Name:</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>E-mail:</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password:</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password:</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">REGISTER</button>
		</div>
		<p>Already a member?<a href="login.php">sign in</a></p>
	</form>
	
</div>
<footer>
	<p>By Shantonu Suman</p>
</footer>
</body>
</html>