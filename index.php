<?php

	include('view/header.php');

 
	if(!isset($_GET['p'])){
		include('view/accueil.php');
	}
	else{
		if($_GET['p']=='accueil'){
			include('view/accueil.php');
		}
		else if($_GET['p']=='ajout_client'){
			include('view/ajout_client.php');
		}
		else if($_GET['p']=='login'){
			include('view/login.php');
		}
		else if($_GET['p']=='list_client'){
			include('view/list_client.php');
		}
		else if($_GET['p']=='ajout_agent'){
			include('view/ajout_agent.php');
		}
		else if($_GET['p']=='list_agent'){
			include('view/list_agent.php');
		}
		else if($_GET['p']=='ajout_agence'){
			include('view/ajout_agence.php');
		}
		else if($_GET['p']=='list_agence'){
			include('view/list_agence.php');
		}
		else if($_GET['p']=='operation'){
			include('view/operation.php');
		}
		else if($_GET['p']=='operation2'){
			include('view/operation2.php');
		}
		else if($_GET['p']=='resultat'){
			include('view/resultat.php');
		}
		else{
			include'view/404.php';
		}
		
	}

	include('view/footer.php');
?>