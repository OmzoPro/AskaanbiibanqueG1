<?php 
include('../modele/userControle.php');

$userController = new UseControle();
$connected=0;
if(isset($_POST['connexion'])){
	$login = $_POST['login'];
	$password = $_POST['password'];
	$erreur_log="";

	if($userController->authentification($login,$password)){
		
		$_SESSION['connexion']=1;
		$erreur_log="Connexion etablie";
		header("location:../index.php");
	}else{
		$_SESSION['connexion']=0;
		$erreur_log="login ou mot de passe incorrect";
		header("location:../index.php?p=login");
	}
}
if (isset($_GET['deconnexion'])) {
  session_destroy();
  $_SESSION['connexion']=0;
  header("location:index.php?p=login");
}
?>