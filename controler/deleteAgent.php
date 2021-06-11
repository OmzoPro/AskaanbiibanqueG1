<?php 
//injection de dependance
include('../modele/agentControle.php');
include('../modele/agent.php');
/*
instance de la classe UseControle 
et creation de l'objet qui s'appele userController de la classe UseControle
*/

$agentController = new AgentControle();
if ($stmt->execute([':idAgent' => $idAgent])) {
  header("location: {$_SERVER['HTTP_REFERER']}");
}
  
  
  //instance de classe User
  $agent = new Agent($nomAgent,$prenomAgent,$emailAgent,$adresseAgent,$sexe,$grade,$telephoneAgent,$naissanceAgent,$dateCreaAgent);

  //appele a la fonction addUser de la useControle qui permet d'inserer des users a la base de donnée
  $agentController->addAgents($agent);



} 


 ?>