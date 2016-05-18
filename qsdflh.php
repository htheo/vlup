<?php require('config.php'); ?>

<?php
	if(!isset($_SESSION["role"])){

		header("Location: erreur_acces.php");
	}
	if($_SESSION["role"]!=0){
		header("Location: post.php");
	}
if(isset($_POST['id'])){


$id	= htmlentities($_POST['id']);
echo $id;

$sql = 'DELETE FROM vlup_articles2 WHERE ID="'.$id.'"';
$db->exec($sql);


 
	header("Location: admin.php");

}else{
	header("Location: admin.php");
}
?>
