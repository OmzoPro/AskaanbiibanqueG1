<?php 
require_once('database.php');
class OperationControle extends Database{
	
	/**
	 * fonction pour inserer les données de l'operation a la base de donnée
	 **/
	public function addOperation(Operation $operation){
		$sql="INSERT INTO operations (typeOperation,montant,dateOperation,idClient, idAgent,soldeAvant,soldeApres) VALUES(:type,:montant,:dateope,:idcli,:idagent, soldeavant, soldeapres)";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':type', $operation->getTypeOperation(), PDO::PARAM_STR);
		$stmt->bindValue(':montant', $operation->getMontant(), PDO::PARAM_STR);
		$stmt->bindValue(':dateope', $operation->getDateOperation(), PDO::PARAM_STR);
		$stmt->bindValue(':idcli', $operation->getIdClient(), PDO::PARAM_STR);
		$stmt->bindValue(':idagent', $operation->getIdAgent(), PDO::PARAM_STR);
		$stmt->bindValue(':soldeavant', $operation->getSoldeAvant(), PDO::PARAM_STR);
		$stmt->bindValue(':soldeapres', $operation->getSoldeApres(), PDO::PARAM_STR);
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");
	}
	
}

?>