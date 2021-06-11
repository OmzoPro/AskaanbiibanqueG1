<?php 
//injection de dependance
include('../modele/clientControle.php');
include('../modele/client.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$clientController = new clientControle();
if (isset($_POST['ajouter'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $naissance = $_POST['naissance'];
    $sexe = $_POST['sexe'];
	$adresse = $_POST['adresse'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$dateCreation = $_POST['dateCreation'];
	$cni = $_POST['cni'];
    
	$numCompte = $_POST['numCompte'];
    $typeCompte = $_POST['typeCompte'];
    $solde = $_POST['solde'];
	
	
	//instance de classe User
	$client = new Client($nom,$prenom,$naissance,$sexe,$adresse,$telephone,$email,$dateCreation,$cni);
    $compte = new Compte($numCompte,$typeCompte,$solde);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
	$clientController->addClient($client,$compte);

	


}	

 ?>