<?php

//Copie de l'avatar dans le dossier image
include('config.php');
	if(!isset($_SESSION["role"])){

		header("Location: erreur_acces.php");
	}else{

	if(empty(file_get_contents($_FILES['avatar']['tmp_name']))){
		header("Location: erreur_acces.php");
	}
	$validation	= 2;
	$id=$_POST('id');



$sql = 'UPDATE vlup_articles2 
SET validation= "'.$validation.'"

WHERE ID="'.$id.'"';
$db->exec($sql);


header("Location: admin.php");

	

}
?>