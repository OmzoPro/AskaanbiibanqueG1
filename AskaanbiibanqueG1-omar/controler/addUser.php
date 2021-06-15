
<?php
//injection de dependance
include('../modele/agentControle.php');
include('../modele/user.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$userController = new AgentControle();
if (isset($_POST['ajouter'])) {
	$mon = $_POST['mon'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	


	//instance de classe User
	$user = new User($mon,$password,$role);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donn"e
	$userController->addUsers($user);
}


?>