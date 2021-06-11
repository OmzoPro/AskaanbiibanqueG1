<<<<<<< HEAD
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
=======
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
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
?>