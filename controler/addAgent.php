<?php 
//injection de dependance
include('../modele/agentControle.php');
include('../modele/agent.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$agentController = new AgentControle();
if (isset($_POST['ajouter'])) {
	$idAgence = $_POST['agence'];
	$nomAgent = $_POST['nom'];
	$prenomAgent = $_POST['prenom'];
	$emailAgent = $_POST['email'];
	$adresseAgent = $_POST['adresse'];
	$sexe = $_POST['sexe'];
	$grade = $_POST['grade'];
	$telephoneAgent = $_POST['telephone'];
	$naissanceAgent = $_POST['dateNaissance'];
	$dateCreaAgent = $_POST['dateCreation'];
	
	
	
	//instance de classe User
	$agent = new Agent($idAgence,$nomAgent,$prenomAgent,$emailAgent,$adresseAgent,$sexe,$grade,$telephoneAgent,$naissanceAgent,$dateCreaAgent);

	//appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
	$agentController->addAgents($agent);

	


}	


 ?>