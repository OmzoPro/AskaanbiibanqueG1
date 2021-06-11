<?php 
include('../modele/userControle.php');

$userController = new UseControle();

if(isset($_POST['connexion'])){
	$login = $_POST['login'];
	$password = $_POST['password'];
	$erreur_log="";

	if($userController->authentification($login,$password)){
		$erreur_log="Connexion etablie";
		header("location:../index.php");
	}else{
		$erreur_log="login ou mot de passe incorrect";
		header("location:../index.php?p=login");
	}    
}
?>