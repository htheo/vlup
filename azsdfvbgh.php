<?php require('config.php'); ?>

<?php
	if(!isset($_SESSION["role"])){

		header("Location: erreur_acces.php");
	}
	if($_SESSION["role"]!=0){
		header("Location: post.php");
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
		<div class="admin">
			<h1>Alors Quoi de neuf à mettre sur le site ? </h1>
			<h2>C'est un jour ou tu peux manquer de respect fais toi plaisir ! ;)</h2>


			<form class="bigformContent" method="post" action="uploadimage.php" enctype="multipart/form-data">
			  <div class="formContent">
				  <h3>La petite image de type drôle :</h3>
				  <div class="file-drop-area">
					  <span class="fake-btn">Choose files</span>
					  <span class="file-msg js-set-number">or drag and drop files here</span>
					  <input class="file-input" type="file" id="avatar" name="avatar" accept=".jpg" multiple>
				  </div>
			  </div>

				<div class="formContent">
					<h3>Le petit titre de type très drôle</h3>
					<p class="formSubContent">
						<label for="petitTitre">Fais toi plez</label>
						<input class="largInput" type="text" name="title" id="petitTitre" required >
					</p><br>
				</div>
				<h3>C'est quoi le Hashtag ?</h3>
				<div class="select">
					<SELECT name="type" size="1" required>

						<OPTION value="Web">Web</option>
						<OPTION value="CD">CD</option>
						<OPTION value="CV">CV</option>
						<OPTION value="DI">DI</option>
						<OPTION value="3D">3D</option>
						<OPTION value="JV">JV</option>
						<OPTION value="BAP">BAP</option>
						<OPTION value="ESILV">ESILV</option>
						<OPTION value="PIX">PIX</option>
						<OPTION value="EMLV">EMLV</option>

						<OPTION value="Pole">Pole</option>
					</SELECT><br>
				</div>
				<input name="validation" value="0" hidden>
				<!-- <input name="validation" value="0" hidden> -->
				<div class="formContent">
					<h3>La petite description</h3>
					<textarea id="petiteDescription" type="text" placeholder="Enjoy :)" name="description"></textarea>

				</div>
					<div class="form-submit">
						<input class='inputButton' type="submit" value="Ajout"/>
					</div>
				</form>

			<div class="adminLink">
				<a href="admin.php"><input type="button" class="inputButton" value="Espace Admin"></a>
			</div>

		</div>
	</div>

<?php include('footer.php') ?>

</body>
</html>