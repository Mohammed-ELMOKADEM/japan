<?php
	include 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Le Parc D'Ueno</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/Kabukicho.css">
	<script src="../js/script.js" defer></script>
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
			<div class="article1">
				<section><img src="../medias/im1.jpg"></section>
					<section id="title"><h1>Le Parc d'Ueno</h1></section>
					<section><p>Le parc Ueno est un immense jardin situé dans l’arrondissement de Taito, au nord-est de Tokyo. Auparavant, l’espace appartenait aux moines du temple Kaneiji, ordre fondé en 1625 et réputé pour sa richesse, sa grandeur, et la protection qu’elle offrait contre les démons censés attaquer la ville d’Edo.Le temple fut détruit durant la guerre de Boshin en 1869 et le parc offert à la municipalité de Tokyo en 1924 par l’empereur japonais Taisho. Avant cette date, le parc fut ouvert en tant que jardin populaire en 1873. Mais c’est au 20ème siècle que l’empereur Taisho le baptise « Ueno Onshi Koen », ou « Parc de Ueno, Cadeau impérial ».<a href="https://japon-fr.com/parc-de-ueno-tokyo.htm" style="text-decoration: none;color:red;">Pour plus d'information..</a></p>
					</section>
		</section>
		<section id="right_menu">
			<video src="../medias/tokyo.mp4" controls width="100%" height="300" poster="../medias/tokyo.jpg"></video>
			<div class="container2">
				<h2>NEWSLETTER</h2>
				<hr>
				<?php  
					$sql = "SELECT titre,date_publication,id,approve FROM news WHERE approve='1' LIMIT 3";
					$rs = mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($rs)){
						$id = $row['id'];
						echo "<section>";
							echo "<div>"."<p>".$row["date_publication"]."</p>"."</div>";
							echo "<div>"."<h3>".$row["titre"]."</h3>"."</div>";
							echo "<div align='right'>"."<p>"."<a href='article.php?id=$id'>Cliquez ici pour plus de detail!</a>"."</p>"."</div>";
						echo "</section>";
						}
				?>
				<section id="more">
					<div align="right" style="line-height: 50px;"><p><a href="allnews.php"> >>Toutes les news </a></p></div>
					<div id="subscription">
						<div style="line-height: 50px;text-align: center;"><a href="sign in.php">Se Connecter</a></div>
						<div align="center" style="line-height: 50px;"><a href="Form.php">S'inscrire à newsletter</a></div>
					</div>
				</section>
			</div>
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