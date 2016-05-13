<?php include('config.php'); ?>

<!DOCTYPE html> 
<html>
	<head>
		<title>Mes réalisations graphiques</title>

		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="fr">

		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-tel.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="css/image/logo2.png" />


<?php    
	if (isset($_GET['ID'])){

		$idencours = $_GET['ID'];
		$sql="SELECT * FROM VLUP_articles WHERE ID = " . $idencours;
		$req = $db->prepare($sql);
		$req->execute();
		  
		$result = $req->fetchAll(PDO::FETCH_ASSOC);

		foreach($result as $val){
			?>


		<meta name="DC.title" content="<?php echo $val['title']; ?>">
		<meta name="DC.creator" content="Theo Hinfray">
		<meta name="DC.subject" content="<?php echo $val['title']; ?> : Dessin et réalisation par Théo Hinfray etudiant à l'IIM" />
		<meta name="DC.description" content="<?php echo $val['soustitle']; ?>, par Théo Hinfray etudiant à l'IIM" />
		<meta name="DC.publisher" content="Theo Hinfray">
		<meta name="DC.format" content="website">
		<meta name="DC.identifier" content="www.theo-hinfray.fr">
		<meta name="DC.language" content="fr-FR">
		<meta name="DC.coverage" content="World">
		<meta name="DC.rights" content="&copy; Badabouh corp">
		<!-- END Dublin Core -->


		<!-- Referencement -->
		<meta name="description" content="<?php echo $val['soustitle']; ?>, par Théo Hinfray etudiant à l'IIM">
		<meta name="keywords" content="<?php echo $val['title']; ?>, cave of creativity, <?php echo $val['type']; ?>, creation, theo, hinfray, IIM, etudiant">
		<meta name="author" content="Theo Hinfray">
		<meta name="robots" content="index"> 
		<meta name="Indentifier-URL" content="www.theo-hinfray.fr">
		<!-- END Référencement -->


		<!-- Open Graph-->
		<meta property="og:title" content="<?php echo $val['title']; ?>">
		<meta property="og:image" content="http://www.theo-hinfray.fr/images/<?php echo $val['img_nom']; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="www.theo-hinfray.fr">
		<meta property="og:site_name" content="Mes réalisations - Theo Hinfray">
		<meta property="og:description" content="<?php  echo $val['soustitle']; ?>, par Théo Hinfray etudiant à l'IIM ">
		<!-- END Open Graph-->
	</head>
	<body class="body">


		<header>
			

		</header>
		<div class="singles">
			<div class="single single_img">
				<img src="images/<?php echo $val['img_nom']; ?>" alt="<?php echo $val['title']; ?> par Théo Hinfray">
			</div>
			<div class="single single_describ">
				<h2><?php echo $val['title']; ?></h2>
				<p><?php echo $val['description']; ?> <br><br>par Théo Hinfray.</p>
			</div>
		</div>

		<div class="single_plus">
			<h2>En voir plus...</h2>
			<?php 
			$reponse = $db->query('SELECT ID, img_nom, title, description FROM images ORDER BY RAND() LIMIT 5');
			    while($result = $reponse->fetch()) {
		 			$ID=$result['ID'];
					?>
					<div class="image_dessin">
						<a href="single.php?ID=<?php echo $ID; ?>"><img src="images/<?php echo $result['img_nom'] ?>" alt="<?php echo $result['title'] ?> par Théo Hinfray"></a>
						
					</div>
					<?php
				}
		 
			    $reponse->closeCursor();


	    ?>

		</div>
			
			


		<footer>

		</footer>
<?php
			
			

			
		
	}

}else{
		?>
	</head>
	<body>
		<header>


		</header>
		<div class="menu_real">
			<div class="">
				<br><br><br><br><br><br>
				<h2>Désolé il n'y a rien ici ! </h2>
				<a href="index.php">Voulez vous retourner à l'accueil ?</a>
			</div>
		</div>
		<?php
		
	}
	?>
	
</body>
</html>