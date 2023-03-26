<?php  
	session_start();
	include 'db_connection.php';

	$id = $_GET['id'];

	$sql = "UPDATE news SET approve = 1 WHERE id='$id'";
	$rs=mysqli_query($conn,$sql);
	if($rs){
		header("Location:panel.php?approved");
		exit();
	}
?>