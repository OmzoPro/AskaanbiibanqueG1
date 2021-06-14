<?php
require 'db_delete_agent.php';
$idAgent = $_GET['id'];
$sql = 'SELECT * FROM agence WHERE idAgence=:idAgence';
$statement = $connection->prepare($sql);
$statement->execute([':idAgence' => $idAgent ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nomAgent']) && isset($_POST['telephoneAgent']) && isset($_POST['emailAgent']) && isset($_POST['adresseAgent'])) {
  $nomAgent = $_POST['nomAgent'];
  $emailAgent = $_POST['emailAgent'];
  
  $telephoneAgent = $_POST['telephoneAgent'];
  
  $adresseAgent = $_POST['adresseAgent'];
  $sql = 'UPDATE agence SET nomAgence=:nomAgent, email=:emailAgent, telephone=:telephoneAgent, adresse=:adresseAgent WHERE idAgence=:idAgent';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nomAgent' => $nomAgent, ':emailAgent' => $emailAgent, ':idAgent' => $idAgent,
    ':telephoneAgent' => $telephoneAgent,  ':adresseAgent' => $adresseAgent])) {
    header("location:../index.php?p=ajout_user");
  }



}