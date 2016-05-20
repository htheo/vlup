<?php

//Copie de l'avatar dans le dossier image
include('config.php');
	if(!isset($_SESSION["role"])){

		header("Location: erreur_acces.php");
	}else{

	if(empty(file_get_contents($_FILES['avatar']['tmp_name']))){
		header("Location: erreur_acces.php");
	}
    $avatar = file_get_contents($_FILES['avatar']['tmp_name']);
	$title		= htmlentities($_POST['title']);
	$type	= htmlentities($_POST['type']);
	$validation	= htmlentities($_POST['validation']);
	$description	= htmlentities($_POST['description']);
	$description = str_replace("\n","<br/>",$description);

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


$req = $db->prepare("INSERT INTO vlup_articles2(title, validation, type, description, img_nom) VALUES(:title, :validation, :type, :description, :img_nom)");
				$req->execute(array(
					'title' => $title,
					'validation' => $validation,
					'type' => $type,
					'description' => $description,
					'img_nom' => $nomavatar
					));

 if($validation==1){
 	header("Location: merci.php");
 }
 header("Location: index.php");
	

}
?>