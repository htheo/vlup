

<html lang="fr">
<head>
	<meta charset="utf-8">

	<title>connection</title>
	<meta name="connection" >
	
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

					<p><input class="form-input" type="text" name="pseudo" pattern"^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" placeholder="Votre pseudo ou nom de votre entreprise"></p>
							

					<p><input class="form-input" type="password" pattern"^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" name="motdepasse" placeholder="mot de passe"></p>

					<div class="form-submit">
						<input class='btn'type="submit" value="Se Connecter">	
					</div>
				</form>
	</div>
</div>
	<footer>
		
	</footer>

</body>
</html>