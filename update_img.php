<?php

//Copie de l'avatar dans le dossier image
include('config.php');
	if(!isset($_SESSION["role"])){

		header("Location: erreur_acces.php");
	}else{

	
	$title		= htmlentities($_POST['title']);
	$id		= htmlentities($_POST['suppression']);
	$type	= htmlentities($_POST['type']);
	$validation	= htmlentities($_POST['validation']);
	$description	= htmlentities($_POST['description']);
	$description = str_replace("\n","<br/>",$description);



$sql = 'UPDATE vlup_articles2 
SET title= "'.$title.'",
	validation= "'.$validation.'",
	type= "'.$type.'",
	description= "'.$description.'"

WHERE ID="'.$id.'"';
$db->exec($sql);


header("Location: index.php");

	

}
?>