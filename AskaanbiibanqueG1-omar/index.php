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
		else if($_GET['p']=='depot'){
			include('view/depot.php');
		}
		else if($_GET['p']=='retrait'){
			include('view/retrait.php');
		}
		else if($_GET['p']=='virement'){
			include('view/virement.php');
		}
		else{
			include'view/404.php';
		}
		
	}

	include('view/footer.php');
?>