<!DOCTYPE html> 
<html lang="fr">

	<head>
		<title>VLUP</title>
        <?php include('header.php');
        include('config.php'); ?>


		<meta name="DC.title" content="VLUP - le Vinci du Leonard universitaire">
		<meta name="DC.creator" content="Theo Hinfray">
		<meta name="DC.subject" content="Blog troll sur l'IIM" />
		<meta name="DC.description" content="Retrouver le blog troll de l'IIM, tous les axes s'y retrouvent Web, CV, CD, 3D, JV...." />
		<meta name="DC.publisher" content="Theo Hinfray">
		<meta name="DC.format" content="website">
		<meta name="DC.identifier" content="www.theo-hinfray.fr">
		<meta name="DC.language" content="fr-FR">
		<meta name="DC.coverage" content="World">
		<meta name="DC.rights" content="&copy; Badabouh corp">
		<!-- END Dublin Core -->


		<!-- Referencement -->
		<meta name="description" content="Retrouver le blog troll de l'IIM, tous les axes s'y retrouvent Web, CV, CD, 3D, JV....">
		<meta name="keywords" content="VLUP, PULV, troll IIM, troll axe web, article IIM, Gorafi, Pole Leonard de Vinci, troll, blog IIM">
		<meta name="author" content="Theo Hinfray">
		<meta name="robots" content="index"> 
		<meta name="Indentifier-URL" content="www.theo-hinfray.fr">
		<!-- END Référencement -->


		<!-- Open Graph-->
		<meta property="og:title" content="VLUP, le blog troll de l'IIM pour tous les axes">
		<meta property="og:type" content="website">
		<meta property="og:url" content="www.vlup.fr">
		<meta property="og:image" content="images/3.gif">
		<meta property="og:site_name" content="VLUP - le Vinci de Leonard Universitaire au Pole">
		<meta property="og:description" content="Retrouvez les réalisations graphique de Théo Hinfray etudiant à l'IIM">

		<!-- END Open Graph-->
	</head>
	<body onload="onload()">
		<header>

			<div class="assombrir">
				<h1>VLUP</h1>
				<h2>Le Vinci du Leonard Universitaire</h2>
				<?php if (isset($_SESSION['user'])){
					echo "<h2>Bonjour ".$_SESSION['user']." !</h2>";
				}; ?>

				<?php if (isset($_SESSION['role'])){
					echo "<div class='user-info'><a href='./azsdfvbgh.php'><input type='button' class='inputButton memberCo btn' value='Ajouter un article'/></a></div>";
				}else{
					echo "<div class='user-info'><a href='./connection.php'><input type='button' class='inputButton memberCo btn' value='Espace membre'/></a></div>";
				} ?>
			</div>
		</header>

				
	    <div class="sidebars">
		    <div class="sidebar">
				<ul>
					<li><a href="tag.php?type=Web"><input class="inputButton tagSize" type="button" value="#Web"/></a></li>
					<li><a href="tag.php?type=CV"><input class="inputButton tagSize" type="button" value="#CV"/></a></li>
					<li><a href="tag.php?type=CD"><input class="inputButton tagSize" type="button" value="#CD"/></a></li>
					<li><a href="tag.php?type=DI"><input class="inputButton tagSize" type="button" value="#DI"/></a></li>
					<li><a href="tag.php?type=3D"><input class="inputButton tagSize" type="button" value="#3D"/></a></li>
					<li><a href="tag.php?type=JV"><input class="inputButton tagSize" type="button" value="#JV"/></a></li>
					<li><a href="tag.php?type=BAP"><input class="inputButton tagSize" type="button" value="#BAP"/></a></li>
					<li><a href="tag.php?type=ESILV"><input class="inputButton tagSize" type="button" value="#ESILV"/></a></li>
					<li><a href="tag.php?type=PIX"><input class="inputButton tagSize" type="button" value="#PIX"/></a></li>
					<li><a href="tag.php?type=EMLV"><input class="inputButton tagSize" type="button" value="#EMLV"/></a></li>
					<li><a href="tag.php?type=Pole"><input class="inputButton tagSize" type="button" value="#Pole"/></a></li>
				</ul>
			</div>
		</div>
	    <div class="articles">
	    	<h2>Les derniers articles</h2>
		    <?php 
				
				$reponse = $db->query('SELECT ID, img_nom, title, description FROM vlup_articles2 WHERE validation="0" ORDER BY ID DESC LIMIT 10 ');
			    while($result = $reponse->fetch()) {
		 			$ID=$result['ID'];
					?>
					<div class="article">
						<h3><?php echo $result['title']; ?></h3>
						<a href="single.php?ID=<?php echo $ID; ?>"><img src="avatars/<?php echo $result['img_nom'] ?>" alt="<?php echo $result['title'] ?>"></a>
						<p><?php $description = $result['description'];
						echo  substr($description , 0 , 250  )."..."; ?></p>
					</div>
					<?php
				}
		 
			    $reponse->closeCursor();
            
	    	?>
            
		</div>

        
		<?php include('footer.php') ?>
	</body>

</html>