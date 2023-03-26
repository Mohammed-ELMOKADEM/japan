<?php
	include 'db_connection.php';

	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$submit = $_POST['submit'];
		$sql="INSERT INTO messages (nom,email,message) VALUES ('$name','$email','$message')";
		$rs=mysqli_query($conn,$sql);
	if($rs){
			header("Location:../index.php?message envoyé merci!");
			exit();
		}else{
			header("Location:Contact.php?error votre message n'est pas envoyé!");
			exit();
		}
?>