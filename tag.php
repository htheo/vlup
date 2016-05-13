<?php include('config.php'); ?>

<!DOCTYPE html> 
<html lang="fr">
	<head>
		<?php
		if (isset($_GET['type'])){

		$tag = htmlentities($_GET['type']);
		?>
		<title>VLUP les articles de l'IIM avec le tag <?php echo $tag; ?></title>


		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="fr">

		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-tel.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width" />

		<link rel="icon" type="image/png" href="images/vlup.jpg" />
		<meta name="DC.title" content="VLUP les articles de l'IIM avec le tag <?php echo $tag; ?>">
		<meta name="DC.creator" content="Theo Hinfray">
		<meta name="DC.subject" content="Blog troll sur l'IIM" />
		<meta name="DC.description" content="Retrouver le blog troll de l'IIM, tous les axes, mais la on parle du #<?php echo $tag; ?>" />
		<meta name="DC.publisher" content="Theo Hinfray">
		<meta name="DC.format" content="website">
		<meta name="DC.identifier" content="www.theo-hinfray.fr">
		<meta name="DC.language" content="fr-FR">
		<meta name="DC.coverage" content="World">
		<meta name="DC.rights" content="&copy; Badabouh corp">
		<!-- END Dublin Core -->


		<!-- Referencement -->
		<meta name="description" content="Retrouver le blog troll de l'IIM avec tous ses axes, mais la on parle du <?php echo $tag; ?>">
		<meta name="keywords" content="VLUP, PULV, troll IIM, troll axe <?php echo $tag; ?>, IIM axe <?php echo $tag; ?>, Gorafi, Pole Leonard de Vinci, blog IIM">
		<meta name="author" content="Theo Hinfray">
		<meta name="robots" content="index"> 
		<meta name="Indentifier-URL" content="www.theo-hinfray.fr">
		<!-- END Référencement -->


		<!-- Open Graph-->
		<meta property="og:title" content="VLUP, le blog troll de l'IIM pour tous les axes">
		<meta property="og:type" content="website">
		<meta property="og:url" content="www.vlup.fr">
		<meta property="og:image" content="images/bannier.jpg">
		<meta property="og:site_name" content="VLUP - le Vinci de Leonard Universitaire au Pole">
		<meta property="og:description" content="Retrouver le blog troll de l'IIM, tous les axes, mais la on parle du #<?php echo $tag; ?>">
	
		<!-- END Open Graph-->


		<!-- END Open Graph-->
	</head>
	<body>
		<div class="navbar">
			<a href="index.php"><img src="images/arrow_orange.png" alt="retour bureau"></a>
			<a class="center" href="index.php"><img src="images/logo_title.png" alt="logo retour bureau"></a>
			

		</div>
		<header class="headernav">
			<h1>Les articles de l'IIM #<?php echo $tag; ?></h1>
		</header>

				
	    <div class="sidebars">
		    <div class="sidebar">
				<h2>type d'articles</h2>
				<ul>
					<li><a href="tag.php?type=Web">Web</a></li>
					<li><a href="tag.php?type=CV">Com Visuelle</a></li>
					<li><a href="tag.php?type=CD">Com Digitale</a></li>
					<li><a href="tag.php?type=DI">Design Interactif</a></li>
					<li><a href="tag.php?type=3D">3D</a></li>
					<li><a href="tag.php?type=JV">Jeu Vidéo</a></li>
					<li><a href="tag.php?type=BAP">BAP</a></li>
					<li><a href="tag.php?type=Pole">Pole Leonard De Vinci</a></li>
				</ul>
			</div>
		</div>
	    <div class="articles">
	    	<h2>Les derniers articles  #<?php echo $tag; ?></h2>
		    <?php 
				$reponse = $db->query('SELECT ID, img_nom, title, description FROM vlup_articles2 WHERE type="'.$tag.'"  LIMIT 10');
			    while($result = $reponse->fetch()) {
		 			$ID=$result['ID'];
					?>
					<div class="article">
						<h3><?php echo $result['title']; ?></h3>
						<a href="single.php?ID=<?php echo $ID; ?>"><img src="avatars/<?php echo $result['img_nom'] ?>" alt="<?php echo $result['title'] ?>"></a>
						<p><?php $description = $result['description'];
						echo  substr($description , 0 , 100  )."..."; ?></p>
					</div>
					<?php
				}
		 
			    $reponse->closeCursor();


	    	?>
		    	
		    
		</div>
		<footer>
			<div class="footer">
				<a href="apropos.php">A propos de nous</a>
			</div>
			<div class="footer">
				<a href="https://www.facebook.com/vlupdevinci/"><img src="images/facebook.png"></a>
			</div>
	
		<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/script.js"></script>
		</footer>


	
<?php 
}else{
	header("Location: erreur_action.php");
}
?>

	</body>

</html>