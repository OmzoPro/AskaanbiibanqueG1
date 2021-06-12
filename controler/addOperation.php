<?php 
include('../modele/operationControle.php');
include('../modele/operation.php');
include('../modele/client.php');

$operationControle = new OperationControle();

if(isset($_POST['verifier'])){

	$compte = $_POST['compte'];
	$type_operation = $_POST['type_operation'];

	if($operationControle->verification($compte)){
		if ($type_operation=='depot') {
			header("location:../index.php?p=operation2&type_=depot");
		}else if ($type_operation=='retrait') {
			header("location:../index.php?p=operation2&type_=retrait");
		}else if ($type_operation=='virement') {
			header("location:../index.php?p=virement");
		}


	}else{
		header("location:../index.php?p=operation");
	}    
}


if(isset($_POST['verifier_virement'])){

	$compte = $_POST['compte1'];
	$compte2 = $_POST['compte2'];
	$type_operation = $_POST['type_operation'];

	if(($operationControle->verification($compte)) AND ($operationControle->verification2($compte2))){
			header("location:../index.php?p=operation2&type_=virement");
		}else{
		header("location:../index.php?p=operation");
		}
	}


if(isset($_POST['depret'])){

	$type = $_POST['type'];
	$soldeavant = (int) $_POST['solde'];
	$montant = (int) $_POST['montant'];

	if ($type=="depot") {
		$soldeapres = $soldeavant+$montant;
	}else if ($type=="retrait") {
		$soldeapres = $soldeavant-$montant;
	}

	$idClient = $_POST['id_client'];
	$client=$idClient;
	$agent = $_POST['id_agent'];
	$date_ope = date('Y-m-d H:i:s');
	$solde=$soldeapres;

	$idAgent="";
	$idPersonne="";
	$matriculeClient="";
	$numCompte="";
	$typeCompte="";

	//instance de classe Operation
	$operation = new Operation($type,$montant,$soldeavant,$soldeapres,$date_ope,$client,$agent);


	//appele a la fonction addOperation de la class operationControle qui permet d'inserer les infos de l'opération de depot a la base de donnée
	$operationControle->addOperation($operation);
  
	//instance de classe Operation
	$client = new Client($idClient,$idAgent,$idPersonne,$matriculeClient,$numCompte,$solde,$typeCompte);

	//appele a la fonction editSolde de la class operationControle qui permet de modifier le solde du client apres operation
	$operationControle->editSolde($client);
}

?>