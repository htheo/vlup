<?php include('config.php'); ?>

<!DOCTYPE html> 
<html lang="fr">
	<head>
		<?php
		if (isset($_GET['type'])){

		$tag = $_GET['type'];
		?>
		<title>VLUP les articles de l'IIM avec le tag <?php echo $tag; ?></title>

		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="fr">

		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-tel.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" type="image/png" href="css/image/logo2.png" />


		<!-- END Open Graph-->
	</head>
	<body>
		<header>
			<h1>VLUP</h1>
			<h2>Les articles de l'IIM #<?php echo $tag; ?></h2>
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


	
<?php 
}else{

}
?>

	</body>

</html>