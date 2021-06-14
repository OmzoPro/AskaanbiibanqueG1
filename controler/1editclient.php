<?php
session_start();
include('../modele/client.php');

$editclient = new Editclient();

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

	//instance de classe Editclient
	$client = new Client($nom,$prenom,$naissance,$dateCreation,$telephone,$email,$cni,$sexe);

	//appele a la fonction modification de la class Editclient qui permet de modifier les infos du client
	$editclient->modification($compte);
  


	header('location:../index.php?p=liste_client');
}


?>