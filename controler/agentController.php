<?php 
//injection de dependance
include('../modele/agentControle.php');
include('../modele/agent.php');
include('../modele/user.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$agentController = new AgentControle();

if (isset($_POST['ajouter'])) {
	$role = $_POST['role'];
	$idAgence = $_POST['agence'];
	$nomAgent = $_POST['nom'];
	$prenomAgent = $_POST['prenom'];
	$emailAgent = $_POST['email'];
	$adresseAgent = $_POST['adresse'];
	$sexe = $_POST['sexe'];
	$grade = $_POST['grade'];
	$telephoneAgent = $_POST['telephone'];
	$naissanceAgent = $_POST['dateNaissance'];
	$dateCreaAgent = date('Y-m-d H:i:s');
	$mon = $_POST['mon'];
	$password = $_POST['password'];	
	$idAgent=NULL;

	//instance de la classe Agents
	$agent = new Agent($idAgent,$idAgence,$nomAgent,$prenomAgent,$emailAgent,$adresseAgent,$sexe,$grade,$telephoneAgent,$naissanceAgent,$dateCreaAgent);

	//instance de la classe User
	$user = new User($mon,$password,$grade);
	
	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
	$agentController->addAgents($agent,$user);

	if ($role=="chef_agent") {
		header('location:../index.php?p=list_agent');
	}if ($role=="super_admin") {
		header('location:../index.php?p=list_agents');
	}
}	

if(isset($_POST['edit_agent'])){
	$role = $_POST['role'];
	$idAgent = $_POST['idAgent'];
	$idAgence = $_POST['idAgence'];
	$nomAgent = $_POST['nomAgent'];
	$emailAgent = $_POST['emailAgent'];
	$naissanceAgent = $_POST['naissanceAgent'];
	$telephoneAgent = $_POST['telephoneAgent'];
	$sexe = $_POST['sexe'];
	$prenomAgent = $_POST['prenomAgent'];
	$adresseAgent = $_POST['adresseAgent'];
	$grade = $_POST['grade'];
	$dateCreaAgent = $_POST['dateCreation'];


	//instance de classe Agent
	$agent = new Agent($idAgent,$idAgence,$nomAgent,$prenomAgent,$emailAgent,$adresseAgent,$sexe,$grade,$telephoneAgent,$naissanceAgent,$dateCreaAgent);
	//appele a la fonction modification de la class Editclient qui permet de modifier les infos du client
	$agentController->editAgents($agent);
  
	if ($role=="chef_agent") {
		header('location:../index.php?p=list_agent');
	}if ($role=="super_admin") {
		header('location:../index.php?p=list_agents');
	}
}

?>