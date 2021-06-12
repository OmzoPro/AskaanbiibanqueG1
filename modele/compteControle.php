<?php
require_once('database.php');
class CompteControle extends Database{
public function addCompte(Compte $compte){
		
		$sql="INSERT INTO compte(idClient,numCompte,solde,typeCompte)
		VALUES(:idClient,:numCompte,:solde,:typeCompte);";

		
		//$theID =$this->connect()->lastInsertid();
        
		$stmt= $this->connect()->prepare($sql); //le chemin pour se connecté a la BD
		$stmt->bindValue(':idClient', $compte->getIdClient(), PDO::PARAM_STR);
		$stmt->bindValue(':numCompte', $compte->getNumCompte(), PDO::PARAM_STR);
		$stmt->bindValue(':typeCompte', $compte->getTypeCompte(), PDO::PARAM_STR);
        $stmt->bindValue(':solde', $compte->getSolde(), PDO::PARAM_STR);
		$stmt->execute(); //On exécute la requête  **/
		header("location: {$_SERVER['HTTP_REFERER']}");
	}
}
?>