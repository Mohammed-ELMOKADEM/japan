<?php
	session_start();
	include 'db_connection.php';

	$title =  mysqli_real_escape_string($conn, $_REQUEST['titre']);
	$resume =  mysqli_real_escape_string($conn, $_REQUEST['resume']);
	$content = mysqli_real_escape_string($conn, $_REQUEST['contenu']);
	$submit = $_REQUEST['submit'];
	if (isset($submit)) {	
		$sql = "INSERT INTO news (titre,résumé,contenu) VALUES ('$title','$resume','$content')";
		$res = mysqli_query($conn,$sql);
	}


	if($res){
		header("Location:panel.php?Added Successfully");
		exit();
	}else{
		echo "Something went wrong";
	}


?>