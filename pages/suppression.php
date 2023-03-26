<?php 
	session_start();
	include 'db_connection.php';
	$id = $_GET["id"];
	$delete = "DELETE FROM news WHERE id='$id'";
	$rs = mysqli_query($conn,$delete);
	if($delete){
    	mysqli_close($conn); // Close connection
    	header("location:panel.php"); // redirects to all records page
    	exit;	
	}
	else
	{
    	echo "Error deleting record"; // display error message if not delete
	}
	
?>