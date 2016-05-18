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
				$reponse = $db->query('SELECT ID, img_nom, title, description FROM vlup_articles2 WHERE validation="1" ORDER BY "ID" DESC LIMIT 10');
			    while($result = $reponse->fetch()) {
		 			$ID=$result['ID'];
					?>
					<form class="bigformContent" method="post" action="uploadimage.php" enctype="multipart/form-data">
					
						<input name="title" value="<?php echo $result['title']; ?>">
						<img src="avatars/<?php echo $result['img_nom'] ?>" alt="<?php echo $result['title'] ?>">
						<div class="file-drop-area">
							  <span class="fake-btn">Choose files</span>
							  <span class="file-msg js-set-number">or drag and drop files here</span>
							  <input class="file-input" type="file" id="avatar" name="avatar" multiple>
					  	</div>
						<input name="description" value="<?php echo $result['description']; ?>">
						<input type="submit" name="validation" value="0" hidden>

						
						<input type="input" value="publier">
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