<?php
require 'db_delete_agent.php';
$idAgent = $_GET['id'];
$sql = 'SELECT * FROM agence WHERE idAgence=:idAgence';
$statement = $connection->prepare($sql);
$statement->execute([':idAgence' => $idAgent ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nomAgent']) && isset($_POST['telephoneAgent']) && isset($_POST['emailAgent']) && isset ($_POST['dateCreaAgent'])  && isset($_POST['adresseAgent'])) {
  $nomAgent = $_POST['nomAgent'];
  $emailAgent = $_POST['emailAgent'];
  
  $telephoneAgent = $_POST['telephoneAgent'];
  
  $dateCreaAgent = $_POST['dateCreaAgent'];
  $adresseAgent = $_POST['adresseAgent'];
  $sql = 'UPDATE agence SET nomAgence=:nomAgent, email=:emailAgent, telephone=:telephoneAgent, adresse=:adresseAgent, dateCreation=:dateCreaAgent WHERE idAgence=:idAgent';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nomAgent' => $nomAgent, ':emailAgent' => $emailAgent, ':idAgent' => $idAgent,
    ':telephoneAgent' => $telephoneAgent, ':dateCreaAgent' => $dateCreaAgent, ':adresseAgent' => $adresseAgent])) {
    header("location:javascript://history.go(-1)");
  }



}