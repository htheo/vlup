<!DOCTYPE html> 
<html lang="fr">

	<head>
		<title>VLUP</title>

		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="fr">

		<link href="css/fontcall.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-tel.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="images/logo.jpg" />
		<meta name="DC.title" content="Mes réalisations">
		<meta name="DC.creator" content="Theo Hinfray">
		<meta name="DC.subject" content="" />
		<meta name="DC.description" content="" />
		<meta name="DC.publisher" content="">
		<meta name="DC.format" content="website">
		<meta name="DC.identifier" content="www.theo-hinfray.fr">
		<meta name="DC.language" content="fr-FR">
		<meta name="DC.coverage" content="World">
		<meta name="DC.rights" content="&copy; Badabouh corp">
		<!-- END Dublin Core -->


		<!-- Referencement -->
		<meta name="description" content="Retrouvez les réalisations graphique de Théo Hinfray etudiant à l'IIM">
		<meta name="keywords" content="Cave, creativity, cave of creativity, creation, theo, hinfray, IIM, etudiant">
		<meta name="author" content="Theo Hinfray">
		<meta name="robots" content="index"> 
		<meta name="Indentifier-URL" content="www.theo-hinfray.fr">
		<!-- END Référencement -->


		<!-- Open Graph-->
		<meta property="og:title" content="Mes réalisations">
		<meta property="og:type" content="website">
		<meta property="og:url" content="www.theo-hinfray.fr">
		<meta property="og:site_name" content="Mes réalisations - Theo Hinfray">
		<meta property="og:description" content="Retrouvez les réalisations graphique de Théo Hinfray etudiant à l'IIM">
		<script type="text/javascript" src="js/script.js"></script>
		<!-- END Open Graph-->
	</head>
	<body>
		<header>
			<h1>VLUP</h1>
			<h2>Le gorafi de l'IIM</h2>
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
	    	<h2>Les derniers articles</h2>
		    <?php 
				include('config.php');
				$reponse = $db->query('SELECT ID, img_nom, title, description FROM vlup_articles2 LIMIT 10');
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
			
	
		
		</footer>
	


	</body>

</html>