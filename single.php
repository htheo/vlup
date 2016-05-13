

<!DOCTYPE html> 
<html>
	<head>

		

		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="fr">

		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-tel.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="css/image/logo2.png" />

<?php include('config.php'); ?>
<?php    
	if (isset($_GET['ID'])){

		$idencours = intval($_GET['ID']);

		$sql="SELECT * FROM vlup_articles2 WHERE ID = " . $idencours;
		$req = $db->prepare($sql);
		$req->execute();
		  
		$result = $req->fetchAll(PDO::FETCH_ASSOC);

		foreach($result as $val){
			?>
		<title><?php echo $val['title']; ?></title>

		<meta name="DC.title" content="<?php echo $val['title']; ?>">
		<meta name="DC.creator" content="Theo Hinfray">
		<meta name="DC.subject" content="<?php echo $val['title']; ?>" />
		<meta name="DC.description" content="<?php echo substr($val['description'], 0 , 100  )."..."; ?> : Article troll sur l'IIM <?php echo $val['type']; ?> " />
		<meta name="DC.publisher" content="Theo Hinfray">
		<meta name="DC.format" content="website">
		<meta name="DC.identifier" content="www.theo-hinfray.fr">
		<meta name="DC.language" content="fr-FR">
		<meta name="DC.coverage" content="World">
		<meta name="DC.rights" content="&copy; Badabouh corp">
		<!-- END Dublin Core -->


		<!-- Referencement -->
		<meta name="description" content="<?php echo substr($val['description'], 0 , 100  )."..."; ?> : Article troll sur l'IIM <?php echo $val['type']; ?> ">
		<meta name="keywords" content="<?php echo $val['title']; ?>, VLUP, <?php echo $val['type']; ?>, troll, troll <?php echo $val['type']; ?>, vinci du leonard, IIM, blog">
		<meta name="author" content="Theo Hinfray">
		<meta name="robots" content="index"> 
		<meta name="Indentifier-URL" content="www.theo-hinfray.fr">
		<!-- END Référencement -->


		<!-- Open Graph-->
		<meta property="og:title" content="<?php echo $val['title']; ?>">
		<meta property="og:image" content="http://www.vulp.fr/images/<?php echo $val['img_nom']; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="www.vlup.fr">
		<meta property="og:site_name" content="VLUP - <?php echo $val['title']; ?>">
		<meta property="og:description" content="<?php echo substr($val['description'], 0 , 100  )."..."; ?> #<?php echo $val['type']; ?> ">
		<!-- END Open Graph-->
	</head>
	<body class="body">


		<div class="navbar">
			<a href="index.php"><img src="images/arrow_orange.png" alt="retour bureau"></a>
			<a class="center" href="index.php"><img src="images/logo_title.png" alt="logo retour bureau"></a>
			

		</div>
		<div class="singles">

			<div class="single">
				<h1><?php echo $val['title']; ?></h1>
				<img src="avatars/<?php echo $val['img_nom']; ?>" alt="<?php echo $val['title']; ?> par Théo Hinfray">

				

				<p><?php echo $val['description']; ?> <br><br></p>
			</div>
		</div>

		<div class="single_plus">
			<h2>En voir plus...</h2>
			<div class="3art">
				<?php 
				$reponse = $db->query('SELECT ID, img_nom, title FROM vlup_articles2 ORDER BY RAND() LIMIT 3');
				    while($result = $reponse->fetch()) {
			 			$ID=$result['ID'];
						?>
						<div class="article_single">
							<a href="single.php?ID=<?php echo $ID; ?>"><img src="avatars/<?php echo $result['img_nom'] ?>" alt="<?php echo $result['title'] ?> par Théo Hinfray"></a>
							<h3><?php echo $result['title']; ?></h3>
						</div>
						<?php
					}
			 
				    $reponse->closeCursor();


		    ?>
			</div>

		</div>
			
			


		<footer>

		</footer>
<?php
			
			

			
		
	}

}else{
	
header("Location: erreur_action.php");
		
	}
	?>
	
</body>
</html>