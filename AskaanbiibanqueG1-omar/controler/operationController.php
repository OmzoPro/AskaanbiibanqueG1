<?php
session_start();
include('../modele/operationControle.php');
include('../modele/operation.php');
include('../modele/compte.php');
include('../modele/client.php');
include('../modele/agent.php');

$operationControle = new OperationControle();

if(isset($_POST['verifier_depot_retrait'])){

	$compte = $_POST['compte'];
	$type_operation = $_POST['type_operation'];

	if($operationControle->verification($compte)){
			header('location:../index.php?p=operation2&type_='.$type_operation.'');
		}else{
		header('location:../index.php?p=operation&type_='.$type_operation.'');
		} 
	}


if(isset($_POST['verifier_virement'])){

	$compte = $_POST['compte'];
	$compte2 = $_POST['compte2'];
	$type_operation = $_POST['type_operation'];

	if(($operationControle->verification($compte)) AND ($operationControle->verification2($compte2))){
			header('location:../index.php?p=operation2&type_='.$type_operation.'');
		}else{
		header('location:../index.php?p=operation&type_='.$type_operation.'');
		}
	}


if(isset($_POST['depot_retrait'])){

	$type = $_POST['type'];
	$soldeavant = (int) $_POST['solde'];
	$montant = (int) $_POST['montantOperation'];

	if ($type=="depot") {
		$soldeapres = $soldeavant+$montant;
	}else if ($type=="retrait") {
		$soldeapres = $soldeavant-$montant;
	}

	$agent = $_SESSION['idAgent'];
	$date_ope = date('Y-m-d H:i:s');
	$solde=$soldeapres;

	$comptedest='';
	$idClient="";
	$numCompte=$_POST['num_compte'];

	//instance de classe Operation
	$operation = new Operation($numCompte,$type,$montant,$soldeavant,$soldeapres,$comptedest,$date_ope,$agent);
	
	//appele a la fonction addOperation de la class operationControle qui permet d'inserer les infos de l'opération de depot a la base de donn"e
	$operationControle->addOperation($operation);
  
	//instance de classe compte
	$compte = new Compte($idClient,$numCompte,$type,$solde);

	//appele a la fonction editSolde de la class operationControle qui permet de modifier le solde du client apres operation
	$operationControle->editSolde($compte);

	header('location:../index.php?p=resultat&type_='.$type.'&montant='.$montant.'');
}

if(isset($_POST['virement'])){

	$type = $_POST['type'];
	$soldeavant = (int) $_POST['solde'];
	$montant = (int) $_POST['montantOperation'];

	$solde_destinataire = $soldeavant+$montant;
	$solde_expediteur = $soldeavant-$montant;

	$destinataire = $_POST['destinataire'];
	$date_ope = date('Y-m-d H:i:s');
	$soldeapres=$solde_expediteur;

	$numCompte=$_POST['num_compte'];
	$numCompte2=$_POST['num_compte2'];
	$typeCompte="";
	$agent=$_SESSION['idAgent'];

	//instance de classe Operation
	$operation = new Operation($numCompte,$type,$montant,$soldeavant,$soldeapres,$destinataire,$date_ope,$agent);
	//appele a la fonction addOperation de la class operationControle qui permet d'inserer les infos de l'opération de depot a la base de donnée
	$operationControle->addOperation($operation);

	//instance de classe compte
	$compte = new Compte($numCompte,$typeCompte,$solde_expediteur);

	//appele a la fonction editSolde de la class operationControle qui permet de modifier le solde du client apres operation
	$operationControle->editSolde($compte);
	if ($type='virement') {
		//instance de classe compte
	$compte2 = new Compte($numCompte2,$typeCompte,$solde_destinataire);

	//appele a la fonction editSolde de la class operationControle qui permet de modifier le solde du client apres operation
	$operationControle->editSolde($compte);

	}
	
	header('location:../index.php?p=resultat&type_='.$type.'&montant='.$montant.'');
}

?>