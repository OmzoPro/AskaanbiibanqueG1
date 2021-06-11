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
	
	
	
	//instance de classe User
	$Client = new Client($nom,$prenom,$adresse,$telephone,$email,$naissance,$dateCreation,$cni,$sexe);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
	$clientController->addClients($Client);

	


}	
$compteController = new CompteControle();
if (isset($_POST['ajouter'])) {
	$numCompte = $_POST['numCompte'];
	$typeCompte = $_POST['typeCompte'];
	$solde = $_POST['solde'];
	
	
	
	
	//instance de classe User
	$Compte = new Compte($numCompte,$typeCompte,$solde);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
	$compteController->addCompte($Compte);

	


}


 ?>