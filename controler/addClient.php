<?php 
//injection de dependance
include('../modele/clientControle.php');
include('../modele/client.php');
include('../modele/compteControle.php');
include('../modele/compte.php');


/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$clientController = new ClientControle();
if (isset($_POST['ajouter'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];
	$sexe = $_POST['sexe'];
	$cni = $_POST['cni'];
	$telephone = $_POST['telephone'];
	$naissance = $_POST['dateNaissance'];
	$dateCreation = $_POST['dateCreation'];
	$numCompte = rand();
	$typeCompte = $_POST['typeCompte'];
	$solde = $_POST['solde'];
	
	$Client = new Client($nom,$prenom,$adresse,$telephone,$email,$naissance,$dateCreation,$cni,$sexe);
	$Compte = new Compte($numCompte,$typeCompte,$solde);
	
	$clientController->addClients($Client,$Compte);

	
	


}


 ?>