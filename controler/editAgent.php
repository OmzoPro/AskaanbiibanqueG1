<?php
require 'db_delete_agent.php';
$idAgent = $_GET['id'];
$sql = 'SELECT * FROM agent WHERE idAgent=:idAgent';
$statement = $connection->prepare($sql);
$statement->execute([':idAgent' => $idAgent ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nomAgent'])  && isset($_POST['prenomAgent']) && isset ($_POST['naissanceAgent'])  && isset($_POST['sexe']) &&
isset ($_POST['telephoneAgent'])  && isset($_POST['emailAgent']) && isset($_POST['adresseAgent'])) {
  $nomAgent = $_POST['nomAgent'];
  $emailAgent = $_POST['emailAgent'];
  $naissanceAgent = $_POST['naissanceAgent'];
  $telephoneAgent = $_POST['telephoneAgent'];
  $sexe = $_POST['sexe'];
  $prenomAgent = $_POST['prenomAgent'];
  $adresseAgent = $_POST['adresseAgent'];
  $sql = 'UPDATE agent SET nom=:nomAgent, email=:emailAgent, naissance=:naissanceAgent, telephone=:telephoneAgent, prenom=:prenomAgent, adresse=:adresseAgent, sexe=:sexe WHERE idAgent=:idAgent';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nomAgent' => $nomAgent, ':emailAgent' => $emailAgent, ':idAgent' => $idAgent,
  ':naissanceAgent' => $naissanceAgent, ':telephoneAgent' => $telephoneAgent, ':sexe' => $sexe, ':adresseAgent' => $adresseAgent, ':prenomAgent' => $prenomAgent])) {
    //header("Location: /");
  }



}