<?php
	include 'db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index des villes</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/Index de villes.css">
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
			<table border="1" id="table1">
				<tr>
					<th>Ville</th>
					<th>Superficie</th>
					<th>Population</th>
					<th>Photos</th>
				</tr>
				<tr>
					<td>Tokyo</td>
					<td>2194km<sup>2</sup></td>
					<td>14,043,239</td>
					<td width="40%">
						<table>
							<tr>
								<td><a href="../medias/DSC00152.jpg" target=”_blank”><img src="../medias/DSC00152.jpg"></a></td>
								<td><a href="../medias/DSC01229.jpg" target=”_blank”><img src="../medias/DSC01229.jpg"></a></td>
							</tr>
							<tr>
								<td><a href="../medias/DSC09172.jpg" target=”_blank”><img src="../medias/DSC09172.jpg"></a></td>
								<td><a href="../medias/DSC09232.jpg" target=”_blank”><img src="../medias/DSC09232.jpg"></a></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>Kyoto</td>
					<td class="Superficie">828km<sup>2</sup></td>
					<td>1,464,890</td>
					<td width="300px">
						<table>
							<tr>
								<td><a href="../medias/27005.jpg" target=”_blank”><img src="../medias/27005.jpg"></a></td>
								<td><a href="../medias/367363.jpg" target=”_blank”><img src="../medias/367363.jpg"></a></td>
							</tr>
							<tr>
								<td><a href="../medias/367360.jpg" target=”_blank”><img src="../medias/367360.jpg"></a></td>
								<td><a href="../medias/erik-eastman-wJj5Bs1jHxg-unsplash.jpg" target=”_blank”><img src="../medias/erik-eastman-wJj5Bs1jHxg-unsplash.jpg"></a></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>Osaka</td>
					<td>226km<sup>2</sup></td>
					<td>2,691,185</td>
					<td>
						<table>
							<tr>
								<td><a href="../medias/40350.jpg" target=”_blank”><img src="../medias/40350.jpg"></a></td>
								<td><a href="../medias/40355.jpg" target=”_blank”><img src="../medias/40355.jpg"></a></td>
							</tr>
							<tr>
								<td><a href="../medias/40311.jpg" target=”_blank”><img src="../medias/40311.jpg"></a></td>
								<td><a href="../medias/40310.jpg" target=”_blank”><img src="../medias/40310.jpg"></a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
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