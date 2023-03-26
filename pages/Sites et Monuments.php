<?php
	include 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sites et Monuments</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/Sites et Monuments.css">
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
			<div class="article">
				<div id="monuments_pic">
					<img src="../medias/kyoto.jpg">
				</div>
				<div id="monuments_title">
					<h1>Kyoto</h1>
				</div>
				<div id="monuments_descrip">
					<p>Kyoto est une ville japonaise de la région du Kansai, au centre de Honshū. Elle fut de 794 à 1868 la capitale impériale du Japon, sous le nom de Heian-kyō (« Capitale de la paix et de la tranquillité »). Elle est aujourd'hui, avec ses palais impériaux, ses milliers de sanctuaires shinto et de temples bouddhistes, le cœur culturel et religieux du pays. La ville est aussi la capitale de la préfecture de Kyoto ainsi que l'une des grandes villes de la zone métropolitaine Keihanshin (Osaka-Kobe-Kyoto). Sa population est de 1,46 million d'habitants (estimations 2020).</p>
				</div>
			</div>
			<div class="article">
				<div id="monuments_pic">
					<img src="../medias/palais-imperial-tokyo.jpg">
				</div>
				<div id="monuments_title">
					<h1>Le Palais impérial de Tokyo</h1>
				</div>
				<div id="monuments_descrip">
					<p>Le palais de Tokyo est un incontournable lorsque l’on voyage au Japon, et qu'on voit en cours de japonais en ligne. Son emplacement était autrefois la place de l'ancien château d'Edo, résidence officielle des shoguns Tokugawa jusqu'en 1868, date de la révolution Meiji.
					La même année, Tokyo devient la capitale et le château d'Edo, la nouvelle résidence principale de l'empereur. Détruit une première fois en 1873, il prend la forme du palais actuel en 1888.</p>
				</div>
			</div>
			<div class="article">
				<div id="monuments_pic">
					<img src="../medias/skytree-japon.jpg">
				</div>
				<div id="monuments_title">
					<h1>Skytree à Japon</h1>
				</div>
				<div id="monuments_descrip">
					<p>Deuxième plus haute tour du monde à son inauguration en 2012 (634 mètres), la Skytree est un lieu privilégié de culture. On y retrouve par exemple un aquarium et un planétarium.
					Mais on peut également y faire du shopping avec plus de 300 magasins et restaurants répartis. Le bâtiment est très fréquenté et très vivant tout au long de l’année.Elle est une des incarnations de la modernité de la mégalopole japonaise et de son rayonnement à l’échelle internationale.</p>
				</div>
			</div>
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
						$id=$row['id'];
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