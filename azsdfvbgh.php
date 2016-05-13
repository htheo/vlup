<?php include('config.php'); ?>

<?php
if (empty($_SESSION["ID"])||$_SESSION['ID']!=1) {
	header("Location: erreur_acces.php");
}



?>


<html lang="fr">
<head>
	<meta charset="utf-8">

	<title>Insertion image</title>
	<meta name="connection" >
	
	<link href="css/style.css" rel="stylesheet" type="text/css">
	

</head>
<body>
	<header>
		

	</header>
<div class="menu_real">
	<div class="admin"><br><br><br>
		<h1>Alors Quoi de neuf à mettre sur le site ? </h1>


		<form method="post" action="uploadimage.php" enctype="multipart/form-data">
				<h2>Daily Post</h2>

	      <div><label>Image :</label><input type="file" id="avatar"  name="avatar"/> </div>

	     

						<p><input type="text" name="title" value="Le petit titre" required ></p><br>
									
						
						
						<p>Type : </p>
						<SELECT name="type" size="1" required>
							<OPTION value="Web">Web</option>
							<OPTION value="CD">CD</option>
							<OPTION value="CV">CV</option>
							<OPTION value="DI">DI</option>
							<OPTION value="BAP">BAP</option>
							<OPTION value="3D">3D</option>
							<OPTION value="JV">JV</option>
							<OPTION value="Pole">Pole</option>

							

						</SELECT><br>

								
						<p><textarea type="text" name="description" placeholder="La petite description"></textarea></p><br>
				
			
			
				<input class="btn"type="submit"></br></br>
			</form>

	</div>
</div>

</body>
</html>