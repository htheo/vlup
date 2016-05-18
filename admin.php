<!DOCTYPE html> 
<html lang="fr">

	<head>
		<title>VLUP</title>
        <?php include('header.php') ;
        include('config.php');?>

		<link rel="icon" type="image/png" href="images/vlup.jpg" />
		

		<!-- END Open Graph-->
	</head>
	<?php
	if(!isset($_SESSION["role"])){

		header("Location: erreur_acces.php");
	}
	if($_SESSION["role"]!=0){
		header("Location: post.php");
	}else{
?>
	<body onload="onload()">
		<header>

			<?php if (isset($_SESSION['pseudo'])){
				echo "<div class='user-info'>Bonjour ".$_SESSION['pseudo']." !</div>";
			}else{
				echo "<div class='user-info'><a href='./azsdfvbgh.php'>Espace membre</a></div>";
			} ?>

			<div class="assombrir">
				<h1>VLUP</h1>
				<h2>Le Vinci du Leonard Universitaire</h2>
			</div>
		</header>

				
	    <div class="sidebars">
		    <div class="sidebar">
				<ul>
					<li><a href="tag.php?type=Web">#Web</a></li>
					<li><a href="tag.php?type=CV">#CV</a></li>
					<li><a href="tag.php?type=CD">#CD</a></li>
					<li><a href="tag.php?type=DI">#DI</a></li>
					<li><a href="tag.php?type=3D">#3D</a></li>
					<li><a href="tag.php?type=JV">#JV</a></li>
					<li><a href="tag.php?type=BAP">#BAP</a></li>
					<li><a href="tag.php?type=ESILV">#ESILV</a></li>
					<li><a href="tag.php?type=PIX">#PIX</a></li>
					<li><a href="tag.php?type=EMLV">#EMLV</a></li>
					<li><a href="tag.php?type=Pole">#Pole</a></li>
				</ul>
			</div>
		</div>
	    <div class="articles">
	    	<h2>Les articles à valider cher admin</h2>
		    <?php 
				$reponse = $db->query('SELECT ID, img_nom, title, type, description FROM vlup_articles2 WHERE validation="1" ORDER BY ID DESC LIMIT 10');
			    while($result = $reponse->fetch()) {
		 			$ID=$result['ID'];
		 			$type=$result['type'];
					?>
					<form class="bigformContent" method="post" action="uploadimage.php" enctype="multipart/form-data">
						<div class="formContent">
							<h3>Le petit titre de type très drôle</h3>
							<p class="formSubContent">
								<label for="petitTitre">Fais toi plez</label>
								<input class="largInput" type="text" value="<?php echo $result['title']; ?>" name="title" id="petitTitre" required >
							</p><br>
						</div>
						<img src="avatars/<?php echo $result['img_nom'] ?>" alt="<?php echo $result['title']; ?>">
						<div class="file-drop-area">
							  <span class="fake-btn">Choose files</span>
							  <span class="file-msg js-set-number">or drag and drop files here</span>
							  <input class="file-input" type="file" id="avatar" name="avatar" multiple>
					  	</div>
					  	<div class="select">
							<SELECT name="type" size="1" required>
								<OPTION value="<?php echo $type; ?>"><?php echo $type;  ?></option>
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
						<div class="formContent">
							<h3>La petite description</h3>
							<textarea id="petiteDescription" type="text"  name="description"><?php echo $result['description']; ?></textarea>

						</div>
						<input type="text" name="validation" value="0" hidden>
						<input type="submit" name="suppression" value="<?php echo $ID; ?>" hidden>

						
						<input type="submit" type="input" value="publier">
					</form>
					<form method="post" action="qsdflh.php">
						<input name="id" value="<?php echo $ID; ?>" hidden>
						<input type="submit" value="supprimer">

					</form>
					
					<?php
				}
		 
			    $reponse->closeCursor();
            
	    	?>
            
		</div>

        
		<?php include('footer.php') ?>
	</body>

</html>









<?php
	}
?>