<?php

//Copie de l'avatar dans le dossier image
include('config.php');
if (empty($_SESSION["ID"])||$_SESSION['ID']!=1) {
	header("Location: erreur_acces.php");
}

    $avatar = file_get_contents($_FILES['avatar']['tmp_name']);
	$title		= htmlentities($_POST['title']);
	$type	= $_POST['type'];
	$description	= htmlentities($_POST['description']);

function move_avatar($avatar)

{
 $extension_upload = "jpg";

    $name = time();

    $nomavatar = str_replace(' ','',$name).".jpg";

    $name = "./avatars/".str_replace('','',$name).".jpg";

    move_uploaded_file($_FILES['avatar']['tmp_name'],$name);
 	return $nomavatar;   
}

                         $nomavatar=(!empty($_FILES['avatar']['size']))?move_avatar($avatar):'';


$req = $db->prepare("INSERT INTO vlup_articles2(title, type, description, img_nom) VALUES(:title, :type, :description, :img_nom)");
				$req->execute(array(
					'title' => $title,
					'type' => $type,
					'description' => $description,
					'img_nom' => $nomavatar
					));
 
				header("Location: index.php");


?>