<?php
require ('config.php');
  
$pseudo		= htmlentities($_POST['pseudo']);
$password	= htmlentities($_POST['motdepasse']);

$connecte = 0;

// On récupère tout le contenu de la table 

if (isset($_GET['pseudo']) && isset($_GET['password'])) {
 
    $pseudo = $_GET['pseudo'];
    $password = $_GET['password'];
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
}



	
	
	
	


?>