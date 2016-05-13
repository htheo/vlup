<!DOCTYPE html> 
<html lang="fr">

	<head>
		<title>VLUP</title>

		<meta charset="UTF-8">
		<meta http-equiv="content-language" content="fr">

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

				<?php 
				include('config.php');
				$reponse = $db->query('SELECT ID, img_nom, title, sous_title FROM vlup_articles2');
			    while($result = $reponse->fetch()) {
		 			$ID=$result['ID'];
					?>
					<div class="article">
						<a href="single.php?ID=<?php echo $ID; ?>"><img src="images/<?php echo $result['img_nom'] ?>" alt="<?php echo $result['title'] ?> par Théo Hinfray"></a>
						
					</div>
					<?php
				}
		 
			    $reponse->closeCursor();


	    ?>
	    <div class="sidebars">
		    <div class="sidebar">
				<h2>type d'articles</h2>
				<ul>
					<li>Web</li>
					<li>Com Visuelle</li>
					<li>Com Digitale</li>
					<li>Design Interactif</li>
					<li>3D</li>
					<li>Jeu Vidéo</li>
					<li>BAP</li>
					<li>Pole Leonard De Vinci</li>
				</ul>
			</div>
		</div>
	    <div class="articles">
	    	<h2>Les derniers articles</h2>
		    <div class="article">
		    	
		    		<h3>Le BDE VoteBlanc fait la surprise face au BDE OCTOPULV</h3>
		    	<img src="images/octopulv.jpg">
		    	
		    	<p>lkjqdhsf ljsdqhf qsndf sqdkjf qsd;,fb qsd;fn bqs;d,nbf sq,;ndf bsdn,bf s,ndfb qdkjf hq;,snd s;jqhd qs;:f nqs;,f qdndf bqs;,d qs,;d bsq,d bsqfnb
		    		 qkjsd hksqjd sqjdn q;s,db qs,hfb qsfb sdbf q;s,dfb qdsjkfb sd,nfb sdd </p>
		    	
		    </div>
		    <div class="article">
		    	<h3>Le BDE VoteBlanc fait la surprise face au BDE OCTOPULV</h3>
		    	<img src="images/octopulv.jpg">
		    	
		    	<p>lkjqdhsf ljsdqhf qsndf sqdkjf qsd;,fb qsd;fn bqs;d,nbf sq,;ndf bsdn,bf s,ndfb qdkjf hq;,snd s;jqhd qs;:f nqs;,f qdndf bqs;,d qs,;d bsq,d bsqfnb
		    		 qkjsd hksqjd sqjdn q;s,db qs,hfb qsfb sdbf q;s,dfb qdsjkfb sd,nfb sdd </p>
		    	
		    </div>
		    <div class="article">
		    	<h3>Le BDE VoteBlanc fait la surprise face au BDE OCTOPULV</h3>
		    	<img src="images/octopulv.jpg">
		    	
		    	<p>lkjqdhsf ljsdqhf qsndf sqdkjf qsd;,fb qsd;fn bqs;d,nbf sq,;ndf bsdn,bf s,ndfb qdkjf hq;,snd s;jqhd qs;:f nqs;,f qdndf bqs;,d qs,;d bsq,d bsqfnb
		    		 qkjsd hksqjd sqjdn q;s,db qs,hfb qsfb sdbf q;s,dfb qdsjkfb sd,nfb sdd </p>
		    	
		    </div>
		    <div class="article">
		    	<h3>Le BDE VoteBlanc fait la surprise face au BDE OCTOPULV</h3>
		    	<img src="images/octopulv.jpg">
		    	
		    	<p>lkjqdhsf ljsdqhf qsndf sqdkjf qsd;,fb qsd;fn bqs;d,nbf sq,;ndf bsdn,bf s,ndfb qdkjf hq;,snd s;jqhd qs;:f nqs;,f qdndf bqs;,d qs,;d bsq,d bsqfnb
		    		 qkjsd hksqjd sqjdn q;s,db qs,hfb qsfb sdbf q;s,dfb qdsjkfb sd,nfb sdd </p>
		    	
		    </div>
		    <div class="article">
		    	<h3>Le BDE VoteBlanc fait la surprise face au BDE OCTOPULV</h3>
		    	<img src="images/octopulv.jpg">
		    	
		    	<p>lkjqdhsf ljsdqhf qsndf sqdkjf qsd;,fb qsd;fn bqs;d,nbf sq,;ndf bsdn,bf s,ndfb qdkjf hq;,snd s;jqhd qs;:f nqs;,f qdndf bqs;,d qs,;d bsq,d bsqfnb
		    		 qkjsd hksqjd sqjdn q;s,db qs,hfb qsfb sdbf q;s,dfb qdsjkfb sd,nfb sdd </p>
		    	
		    </div>
		    <div class="article">
		    	<h3>Le BDE VoteBlanc fait la surprise face au BDE OCTOPULV</h3>
		    	<img src="images/octopulv.jpg">
		    	
		    	<p>lkjqdhsf ljsdqhf qsndf sqdkjf qsd;,fb qsd;fn bqs;d,nbf sq,;ndf bsdn,bf s,ndfb qdkjf hq;,snd s;jqhd qs;:f nqs;,f qdndf bqs;,d qs,;d bsq,d bsqfnb
		    		 qkjsd hksqjd sqjdn q;s,db qs,hfb qsfb sdbf q;s,dfb qdsjkfb sd,nfb sdd </p>
		    	
		    </div>
		</div>


		<footer>
			
	
		
		</footer>
	


	</body>

</html>