<?php 
	session_start();
	include 'db_connection.php';

	$submit = $_POST['submit'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	header("Location:Form.php?email invalide");
    	exit();
	}
	if(isset($submit)) {
		$sql = "INSERT INTO internaute values ('$nom','$prenom','$email')";
		$rs=mysqli_query($conn,$sql);
		if($rs){
		header("Location:../index.php?Merci pour votre inscription");
		exit();
		}else{
			echo "ERROR";
		}
	}
	else{
		echo "ERROR";
	}
?>