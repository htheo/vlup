<?php include('config.php'); ?>

<?php
if (empty($_SESSION["ID"])||$_SESSION['ID']!=1) {
	header("Location: erreur_acces.php");
}



?>


<html lang="fr">
<head>
	<meta charset="utf-8">

	<title>Insertion image</title>
	<meta name="connection" >
	
	<link href="css/style.css" rel="stylesheet" type="text/css">
	

</head>
<body>
	<header>
			<a onclick="appear5('cave'); return false" href=""><img alt="logo Cave of Creativity" src="css/image/logo.png"></a>
			<h1>Cave of Creativity</h1>
			<ul>
				<li><a href="" onclick="appear('accueil'); return false">Accueil</a></li>
				<li><a href="realisation/">Réalisations</a>
					<ul class="sous_menu">
						<br><li><a href="dessin/">Dessins</a></li>
						<li><a href="graphisme/">Graphisme</a></li>
						<li><a href="CV/">Projets</a></li>


					</ul></li>
				<li><a href="CV/">Mon CV</a></li>
				
			</ul>

		</header>
<div class="menu_real">
	<div class="admin"><br><br><br>
		<h1>Alors Quoi de neuf à mettre sur le site ? </h1>


		<form method="post" action="uploadimage.php" enctype="multipart/form-data">
				<h2>Daily Post</h2>

	      <div><label>Image :</label><input type="file" id="avatar"  name="avatar"/> </div>

	     

						<p><input type="text" name="title" value="Le petit titre" required ></p><br>
									
						
						
						<p>Type : </p>
						<SELECT name="type" size="1" required>
							<OPTION value="dessin">Dessin</option>
							<OPTION value="graphisme">Graphisme</option>
							

						</SELECT><br>

								
						<p><textarea type="text" name="description" placeholder="La petite description"></textarea></p><br>
				
			
			
				<input class="btn"type="submit"></br></br>
			</form>

	</div>
</div>

</body>
</html>