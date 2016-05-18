<?php
require ('config.php');
  



// On récupère tout le contenu de la table 

if (isset($_POST['pseudo']) && isset($_POST['motdepasse'])) {
 
    $pseudo		= htmlentities($_POST['pseudo']);
	$password	= htmlentities($_POST['motdepasse']);
	echo $pseudo." ".$password;
    $role = 2;
 
   $sql = "INSERT INTO 
            vlup_users 
        SET 
            pseudo = :pseudo,
            password = :password,
            role = :role
            
            
        ";

    $req = $db->prepare($sql);
    $req->execute(array(
        ':pseudo'   =>  $pseudo,
        ':password' =>  $password,
        ':role' => $role
        
    ));

 


	header("Location: connection.php");
}else{
	echo "bonjour";
}



	
	
	
	


?>