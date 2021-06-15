<?php 
//injection de dependance
include('../modele/clientControle.php');
include('../modele/client.php');
include('../modele/compte.php');
include('../modele/user.php');

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
	$dateCreation = date('Y-m-d H:i:s');

	$numCompte = rand(0,999999999999999);
	$typeCompte = $_POST['typeCompte'];
	$solde = $_POST['solde'];

	$mon = $_POST['mon'];
	$password = $_POST['password'];
	$grade = $_POST['grade'];
	$idClient=NULL;
	
	$Client = new Client($idClient,$nom,$prenom,$adresse,$telephone,$email,$naissance,$dateCreation,$cni,$sexe);
	$Compte = new Compte($numCompte,$typeCompte,$solde);
	$user = new User($mon,$password,$grade);
	
	$clientController->addClients($Client,$Compte,$user);

	header('location:../index.php?p=list_client');

}
if(isset($_POST['edit_client'])){

	$idClient = $_POST['idClient'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$naissance = $_POST['naissance'];
	$sexe = $_POST['sexe'];
	$adresse = $_POST['adresse'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$dateCreation = $_POST['dateCreation'];
	$cni = $_POST['cni'];

	//instance de classe Client
	$client = new Client($idClient,$nom,$prenom,$adresse,$telephone,$email,$naissance,$dateCreation,$cni,$sexe);

	//appele a la fonction modification de la class Editclient qui permet de modifier les infos du client
	$clientController->editClients($client);
  
	header('location:../index.php?p=list_client');
}

?>