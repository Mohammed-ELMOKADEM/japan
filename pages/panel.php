<?php 
	session_start();
	include 'db_connection.php';
	error_reporting(0);
	if (isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>
	<link rel="stylesheet" type="text/css" href="../css/panel.css">
</head>
<body>
	<nav>
		<h1>Welcome Back, <?php echo $_SESSION['username']; ?></h1>
		<a href="logout.php">Se Déconnecter</a>
	</nav>
	<article>
		<?php 
			$id1=$_GET['id'];
			$sql2 = "SELECT titre,résumé,contenu FROM news WHERE id='$id1'";
			$results = mysqli_query($conn,$sql2);
			$data = mysqli_fetch_array($results);
		?>
		<form action="news.php" method="post">
			<h2>AJOUTER UNE NEWS</h2>
			<input type="text" name="titre" placeholder="Titre" required>
			<input type="text" name="resume" placeholder="Resumé" required>
			<textarea placeholder="Contenu" name="contenu" required></textarea>
			<input type="submit" name="submit" value="Ajouter">
		</form>
		<?php
			$sql = "SELECT titre,résumé,id FROM news";
			$rs = mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_array($rs)) {
				$id = $row['id'];
				echo "<table>";
				echo "<tr>";
				echo "<td colspan='3'>"."<h2>".$row['titre']."</h2>"."<hr>"."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td colspan='3'>".$row['résumé']."<hr>"."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>"."<a href='modify.php?id=$id' class='btns'>modifier</a>"."</td>";
				echo "<td>"."<a href='suppression.php?id=$id' class='btns'>supprimer</a>"."</td>";
				echo "<td>"."<a href='approve.php?id=$id' class='btns'>approuver</a>"."</td>";
				echo "</tr>";
			}
				echo "</table>";
		?>
	</article>
</body>
</html>
<?php 
}else{
	header("Location: sign in.php");
				exit();
	}

?>