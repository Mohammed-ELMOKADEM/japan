<?php
	include 'db_connection.php';
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<?php $id = $_GET['id'];
		$tit="SELECT titre,id FROM news WHERE id='$id'";
		$q=mysqli_query($conn,$tit);
		$data=mysqli_fetch_array($q);
	?>
	<title><?php echo $data['titre']?></title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script src="../js/script.js" defer></script>
	<style type="text/css">
		#art{
			margin-top: 40px;
			background-color: #292f34;
			width: 60%;
			height: 100% !important;
			padding: 10px;
			margin-left: 20%;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			border-radius: 30px;
		}
		#art div{
			margin-bottom: 0 !important;
			width: 80%;
			height: auto;
			text-align: center;
			color: white;
			font-size: 17px;
		}
		#art div h1{
			font-size: 29px;
			color: red;
		}
		#art div h2{
			font-size: 20px !important;
		}
		#center{
			width: 100% !important;
			margin-bottom: 70px;
		}
	</style>
	<meta charset="utf-8">
</head>
<body>
	<navbar>
		<div id="logo">
			<h1>旅行</h1>
		</div>
		<button class="circle">
		<div class="line_wrapper"></div>
			<div class="horizontal"></div>
			<div class="vertical"></div>
		</div>
		</button>
		<ul class="links">
			<li style="margin-left: 0;"><a href="../index.php">Accueil</a></li>
			<li><a href="Plan De Site.php">Plan De Site</a></li>
			<li><a href="Qui sommes-nous.php">Qui sommes-nous?</a></li>
			<li><a href="Contact.php">Contact</a></li>
			<li><a href="sign in.php">Se Connecter</a></li>
		</ul>
		<button class="circle1">
		<div class="line_wrapper"></div>
			<div class="horizontal"></div>
			<div class="vertical1"></div>
		</div>
		</button>
	</navbar>
	<article>
		<section id="left_menu" class="left_menu menu">
			<div class="menu_links">
				<ul>
					<li><a href="Sites et Monuments.php">Sites et Monuments</a></li>
					<li><a href="Index de villes.php">Index des villes</a></li>
					<li><a href="Google map.php">Google Map</a></li>
					<li style="margin-bottom: 0;"><a href="Liens Utiles.php">Liens Utiles</a></li>
				</ul>
			</div>
			<div class="flech">MENU</div>
		</section>
		<section id="center">
			<?php
				$id = $_GET['id'];
				$sql = "SELECT id,date_publication,titre,résumé,contenu FROM news WHERE id='$id'";
				$rs = mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_array($rs)){
					echo "<div id='art'>";
					echo "<div>".$row['date_publication']."</div>";
					echo "<div>"."<h1>".$row['titre']."</h1>"."</div>";
					echo "<div>"."<h2>".$row['résumé']."</h2>"."</div>";
					echo "<div>".$row['contenu']."</div>";
					echo "</div>";
					}	
				?>	
		</section>
	</article>
	<footer>
		<div id="sugg">
			<div><h3>Réalisé par:Mohammed El Mokadem</h3></div>
			<div><h3 align="right">Modifié le 21/10/2021</h3></div>
		</div>
		<div id="copyright"><h3>&copy; 2021-2022 All Rights Reserved</h3></div>
	</footer>
</body>
</html>