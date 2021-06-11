<?php 
//injection de dependance
include('../modele/agenceControle.php');
include('../modele/agence.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$agenceController = new AgenceControle();
if (isset($_POST['ajouter'])) {
	$nomAgence = $_POST['nom'];
	
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	
	$telephone = $_POST['telephone'];
	
	$dateCreation = $_POST['dateCreation'];
	
	
	//instance de classe User
	$agence = new Agence($nomAgence,$email,$adresse,$telephone,$dateCreation);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
	$agenceController->addAgences($agence);

	


}	


 ?>