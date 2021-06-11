<<<<<<< HEAD
<?php
//injection de dependance
include('../modele/userControle.php');
include('../modele/User.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$userController = new UseControle();
if (isset($_POST['ajouter'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$login = $_POST['login'];
	$password = $_POST['pwd'];


	//instance de classe User
	$user = new User($nom,$prenom,$login,$password);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donn"e
	$userController->addUsers($user);
}

=======
<?php
//injection de dependance
include('../modele/userControle.php');
include('../modele/User.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$userController = new UseControle();
if (isset($_POST['ajouter'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$login = $_POST['login'];
	$password = $_POST['pwd'];


	//instance de classe User
	$user = new User($nom,$prenom,$login,$password);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donn"e
	$userController->addUsers($user);
}

>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
 ?>