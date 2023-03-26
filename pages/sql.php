<?php
	session_start();
	include 'db_connection.php';

	if (isset($_POST['username']) && isset($_POST['password'])) {
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$username = validate($_POST['username']);
		$password = validate($_POST['password']);

		if (empty($username)) {
			header("Location: sign in.php?error=USERNAME IS REQUIRED");
			exit();
		}elseif (empty($password)) {
			header("Location: sign in.php?error=PASSWORD IS REQUIRED");
			exit();
		}else{
			$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result); 
				if($row['username'] === $username && $row['password'] === $password){
					$_SESSION['username'] = $row['username'];
					$_SESSION['password'] = $row['password'];
					header("Location: panel.php");
					exit();
				}else{
					header("Location: sign in.php?error=INCORRECT USERNAME OR PASSWORD");
					exit();
				}
			}
			else{
				header("Location: sign in.php?error=INCORRECT USERNAME OR PASSWORD");
				exit();
			}
		}
	}
	else{
		header("Location: sign in.php");
		exit();
	}
	


?>