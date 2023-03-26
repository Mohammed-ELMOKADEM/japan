<?php
	session_start();
	include 'db_connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modification</title>
	<style type="text/css">
		form{
			display: flex;
			flex-direction: column;
			width: 50%;
			justify-content: center;
			margin-left: 25%;
			margin-top: 100px;
			align-items: center;
		}
		form input[type="text"],form textarea{
			width: 70%;
			border-radius: 20px;
			border: 1px solid black;
			margin-bottom: 5px;
			text-align: center;
		}
		form input[type="submit"]{
			width: 70px;
			height: 30px;
		}
		form input[type="text"]{
			height: 50px;
		}
		form textarea{
			height: 300px;
			resize: none;
		}
	</style>
</head>
<body>
	<?php
		$id=$_GET['id'];
		$sql1="SELECT titre,résumé,contenu,id FROM news WHERE id='$id'";
		$res=mysqli_query($conn,$sql1);
		$row=mysqli_fetch_array($res);
		if(isset($_POST['modify'])){
			$titre=$_POST['titre'];
			$resume=$_POST['resume'];
			$contenu=$_POST['contenu'];
			$sql="UPDATE news SET titre='$titre',résumé='$resume', contenu='$contenu' WHERE id='$id'";
			$edit=mysqli_query($conn,$sql);
			if($edit)
    		{
      		  	mysqli_close($db); // Close connection
        		header("location:panel.php?successfuly"); // redirects to all records page
        		exit;
    		}else
    			{
    				header("Location:panel.php?error");
    			}
		}
	?>
	<form method="post">
		<input type="text" name="titre" value="<?php echo $row['titre']?>">
		<input type="text" name="resume" value="<?php echo $row['résumé']?>">
		<textarea name="contenu"><?php echo $row['contenu']?></textarea>
		<input type="submit" name="modify" value="modifier">
	</form>
</body>
</html>