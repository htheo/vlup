<?php include('config.php'); ?>

<?php
	if (empty($_SESSION["ID"])||$_SESSION['ID']!=1) {
		header("Location: erreur_acces.php");
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
	<div class="menu_real">
		<div class="admin"><br><br><br>
			<h1>Alors Quoi de neuf à mettre sur le site ? </h1>


			<form method="post" action="uploadimage.php" enctype="multipart/form-data">
					<h2>Daily Post</h2>

			  <div class="formContent">
				  <label for="avatar">Image :</label>
				  <input type="file" id="avatar" name="avatar"/>
			  </div>

				<div class="formContent">
					<p class="formSubContent">
						<label for="petitTitre">Le petit titre</label>
						<input type="text" name="title" id="petitTitre" required >
					</p><br>
				</div>
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


				<div class="formContent">
					<p class="formSubContent">
						<label for="petiteDescription">La petite description</label>
						<textarea id="petiteDescription" type="text" name="description"></textarea>
					</p><br>
				</div>


					<div class="form-submit">
						<button class='btn' id="#btn1" type="submit"></button>
					</div>
				</form>

		</div>
	</div>

<?php include('footer.php') ?>

</body>
</html>