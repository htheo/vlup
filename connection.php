

<html lang="fr">
<head>
	<meta charset="utf-8">

	<title>connection</title>
	<meta name="connection" >

	<link href="css/fontcall.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	

</head>
<body>


		<?php include('config.php');?>	
		<header>


		</header>

<div class='menu_real'>
	
	<div class='admin'>
				<form method="POST" action="validation.php">
					<h1>Bonjour Théo</h1><br>
					<div class="formContent">
						<p class="formSubContent">
							<label for="pseudoForm">Votre pseudo ou nom de votre entreprise</label>
							<input id="pseudoForm" class="form-input" type="text" name="pseudo" pattern"^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
						</p>

						<p class="formSubContent">
							<label for="passwordForm">Votre mot de passe</label>
							<input id="passwordForm" class="form-input" type="password" pattern"^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" name="motdepasse">
						</p>
					</div>

					<div class="form-submit">
						<button class='btn' id="#btn1" type="submit"></button>
					</div>
				</form>
	</div>
</div>
	<footer>
		<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</footer>

</body>
</html>