<?php include('server.php');
// restrict access if not logged in
   if (empty($_SESSION['username'])) {
   	header('location:login.php');
   }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
    <link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
<div class="registration_area">

	<div class="content">
		<?php if(isset($_SESSION['success'])): ?>
		    <h4>
		    	<?php 
		    	   echo $_SESSION['success'];
		    	   unset($_SESSION['success']);
		    	?>
		    </h4>
	    <?php endif ?>

        <?php if(isset($_SESSION['username'])): ?>
        	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        	<p ><a href="index.php?logout='1'" style="color:red">Logout</a></p>
        <?php endif ?>

	</div>
	
</div>
<footer>
	<p>By Shantonu Suman</p>
</footer>
</body>
</html>