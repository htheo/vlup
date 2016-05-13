<?php
require ('config.php');
  
$pseudo		= htmlentities($_POST['pseudo']);
$password	= htmlentities($_POST['motdepasse']);

$connecte = 0;

// On récupère tout le contenu de la table 

$reponse = $db->query('SELECT * FROM vlup_users');
foreach($reponse as $val){
		 
		 if ($val['pseudo']==$pseudo){
		 	if($val['password']==$password){
		 	$id=$val['ID'];
		 	$_SESSION['ID'] = $id;
		 	$_SESSION['name'] = $pseudo;
		 	$connecte = 1;
		 	break;
		 
		 	
		 	

		 	}
		 	// L'user est connecté
		 	
		 		 	

}
}

		 

if ($connecte ==1){header("Location: azsdfvbgh.php");
}else{
	header("Location: connection.php");
}



	
	
	
	


?>