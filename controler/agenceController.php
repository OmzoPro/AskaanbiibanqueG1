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
	$dateCreation =date('Y-m-d H:i:s');
	$idAgence=NULL;
	
	//instance de classe Agence
	$agence = new Agence($idAgence,$nomAgence,$email,$adresse,$telephone,$dateCreation);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
	$agenceController->addAgences($agence);
	header('location:../index.php?p=list_agence');
}	

if(isset($_POST['edit_agence'])){

	$idAgence = $_POST['idAgence'];
	$nomAgence = $_POST['nomAgence'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$adresse = $_POST['adresse'];
	$dateCreation = $_POST['dateCreation'];

	//instance de classe Agence
	$agence = new Agence($idAgence,$nomAgence,$email,$adresse,$telephone,$dateCreation);

	//appele a la fonction modification de la class Editclient qui permet de modifier les infos du client
	$agenceController->editAgences($agence);
  


	header('location:../index.php?p=list_agence');
}


 ?>