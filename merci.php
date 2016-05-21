<?php require('config.php'); ?>

<?php
	if(!isset($_SESSION["role"])){

		header("Location: index.php");
	}
	if($_SESSION["role"]!=2){
		header("Location: index.php");
	}

?>

<!-- -->

<html lang="fr">
<head>
	<title>Insertion image</title>
	<meta name="connection" >
	<?php include('header.php') ?>
</head>

<body>
	<div class="navbar">
		<a href="index.php"><img src="images/arrow_orange.png" alt="retour bureau"></a>
		<a class="center" href="index.php"><img src="images/logo_title.png" alt="logo retour bureau"></a>
	</div>
	<div class="erreur">
		<div class="content">
			<h2>Merci d'avoir publié ;)</h2>
			<p>Nos admins vont lire votre magnifique article pour voir s'il peut être posté ou non. Si vous ne savez pas pourquoi il n'est toujours pas accepté  <a href="https://www.facebook.com/vlupdevinci/" target="_blank"><span>contacte nous sur facebook.</span></a></p>
			<div class="back-button">
				<a href="/VLUP2" class="inputButton">Retour</a>
			</div>
		</div>
	</div>

<?php include('footer.php') ?>

</body>
</html>