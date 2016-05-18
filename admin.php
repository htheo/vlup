<?php
	if(!isset($_SESSION["role"])){

		header("Location: erreur_acces.php");
	}
	if($_SESSION["role"]!=0){
		header("Location: post.php");
	}
?>