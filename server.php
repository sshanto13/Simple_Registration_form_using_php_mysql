<?php   
        session_start();
		$username="";
        $email="";
        $errors = array();
		function filter_user_data($str){
			$data = htmlentities($str);
			$data = trim($str);
			$data = filter_var($str, FILTER_SANITIZE_STRING);
			return $data;
		}
        
        //connet the database

		$db=mysqli_connect('localhost', 'root', '', 'registration');

        //if the register button is clicked
		if (isset($_POST['register'])) {
			// user form input in their form
			$username = filter_user_data($_POST['username']);
			$email = filter_user_data($_POST['email']);
			$password_1 = filter_user_data($_POST['password_1']);
			$password_2 = filter_user_data($_POST['password_2']);
			
			//ensure that form is filled properly
			if (empty($username)) {
			    array_push($errors,"Username is required!"); //add error to errors array
			}
			if (empty($email)) {
			    array_push($errors,"email address is required!"); //add error to errors array
			}
			if (empty($password_1)) {
			    array_push($errors,"Password is required!"); //add error to errors array
			}
			if ($password_1 !=$password_2) {
				array_push($errors,"The two password  is not matched");//
			}
			//if there are no errors, save the data to database
			if (count($errors) == 0) {
				$password=md5($password_1); // encrypting password before save to db
				$sql="INSERT INTO user(username, email, password) VALUES ('$username', '$email', '$password')";
				mysqli_query( $db , $sql);

                $_SESSION['username'] = $username;
				$_SESSION['success']= "You are loged in now!" ;
				header('location:successful-msg.php'); //redirect to successpage
       
			}

		}
        //log in form log in page

        if (isset($_POST['login'])) {
        	$username = filter_user_data($_POST['username']);
			$password = filter_user_data($_POST['password']);
        	if (empty($username)) {
			    array_push($errors,"Username is required!"); //add error to errors array
			}
			if (empty($password)) {
			    array_push($errors,"Password address is required!"); //add error to errors array
			}
			if (count($errors) == 0) {
				$password=md5($password); // encrypting password before  matching that db
				$query= "SELECT * FROM user WHERE username='$username' AND password='$password' ";
				$result = mysqli_query($db, $query);
				// user log in
				if (mysqli_num_rows($result)) {

					$_SESSION['username'] = $username;
					$_SESSION['success']= "You are logged in now!" ;
					header('location:successful-msg.php'); //redirect to successpage
				}
				else{
					array_push($errors,"Wrong Username/Password combination");
				}
       
			}

        	
        }

        //log out

        if(isset($_GET['logout'])) {
        	session_destroy();
        	unset($_SESSION['username']);
        	header('location:index.php');
        }
?>