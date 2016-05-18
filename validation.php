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
		 	
		 	$role=$val['role'];
		 	$connecte=1;
		 
		 	
		 	

		 	}
		 	// L'user est connecté
		 	
		 		 	

}
}

		 

if ($connecte ==1){

		 	$_SESSION["role"] = $role;
		 	header("Location: azsdfvbgh.php");
}else{
	header("Location: connection.php");
}



	
	
	
	


?>