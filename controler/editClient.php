<?php
require 'db_delete_agent.php';
$idClient = $_GET['id'];
$sql = 'SELECT * FROM client WHERE idClient=:idClient';
$statement = $connection->prepare($sql);
$statement->execute([':idClient' => $idClient ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['nom'])  && isset($_POST['prenom']) && isset ($_POST['naissance'])  && isset($_POST['sexe']) &&isset ($_POST['adresse'])  && isset($_POST['telephone']) && isset ($_POST['email'])  && isset($_POST['dateCreation']) && isset($_POST['cni'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $naissance = $_POST['naissance'];
  $sexe = $_POST['sexe'];
  $adresse = $_POST['adresse'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $dateCreation = $_POST['dateCreation'];
  $cni = $_POST['cni'];
  $sql = 'UPDATE client SET nom=:nom, prenom=:prenom, naissance=:naissance, sexe=:sexe, adresse=:adresse, telephone=:telephone,email=:email, dateCreation=:dateCreation, cni=:cni WHERE idClient=:idClient';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':idClient'=>$idClient,':nom'=>$nom, ':prenom'=>$prenom, ':naissance'=>$naissance, ':sexe'=>$sexe, ':adresse'=>$adresse, ':telephone'=>$telephone, ':email'=>$email, ':dateCreation'=>$dateCreation, ':cni'=>$cni]));



}