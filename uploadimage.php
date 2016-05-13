<?php

//Copie de l'images dans le dossier image
include('config.php');
if (empty($_SESSION["ID"])||$_SESSION['ID']!=1) {
	header("Location: erreur_acces.php");
}

    $images = file_get_contents($_FILES['images']['tmp_name']);
	$title		= htmlentities($_POST['title']);
	$type	= $_POST['type'];
	$description	= htmlentities($_POST['description']);

function move_images($images)

{
 $extension_upload = "jpg";

    $name = time();

    $nomimages = str_replace(' ','',$name).".jpg";

    $name = "./imagess/".str_replace('','',$name).".jpg";

    move_uploaded_file($_FILES['images']['tmp_name'],$name);
 	return $nomimages;   
}

                         $nomimages=(!empty($_FILES['images']['size']))?move_images($images):'';


$req = $db->prepare("INSERT INTO images(title, sous_title, type, description, img_nom) VALUES(:title, :type, :description, :img_nom)");
				$req->execute(array(
					'title' => $title,
					'type' => $type,
					'description' => $description,
					'img_nom' => $nomimages
					));
 
				header("Location: realisation/");


?>