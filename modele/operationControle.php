<?php 
require_once('database.php');
class OperationControle extends Database{
	
	/**
	 * fonction pour recuperer les données du client
	**/
	public function getClient(){
		$sql="SELECT * FROM clients";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

	/**
	 * fonction pour verifiel le client
	 **/
	public function verification($compte){
		$sql="SELECT * FROM compte  WHERE  numCompte=:compte";
		$stmt = $this->connect()->prepare($sql);
    	$stmt->bindValue(':compte', $compte, PDO::PARAM_STR);
    	$stmt->execute();
    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
		
		session_start();
    	
    	$idClient = $resultat['idClient'];
    	$_SESSION['idClient'] = $idClient ;
    	$_SESSION['solde'] = $resultat['solde'];
    	$_SESSION['numCompte'] = $resultat['numCompte'];
      $_SESSION['typeCompte'] = $resultat['typeCompte'];
      $_SESSION['idCompte'] = $resultat['idCompte'];

    		$sql="SELECT * FROM client  WHERE  idClient=:idClient";
			$stmt = $this->connect()->prepare($sql);
	    	$stmt->bindValue(':idClient', $idClient, PDO::PARAM_STR);
	    	$stmt->execute();
	    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
	    	
	      $_SESSION['idClient'] = $resultat['idClient'];
	      $_SESSION['nomCompte'] = $resultat['nom'];
	      $_SESSION['prenomCompte'] = $resultat['prenom'];
	      $_SESSION['adresseCompte'] = $resultat['adresse'];
           	
		return $resultat;
	
	}
	/**
	 * fonction pour verifier le destinataire
	 **/
	
	public function verification2($compte2){
		$sql="SELECT * FROM compte  WHERE  numCompte=:compte";
		$stmt = $this->connect()->prepare($sql);
    	$stmt->bindValue(':compte', $compte2, PDO::PARAM_STR);
    	$stmt->execute();
    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
		
    	
    	$idClient2 = $resultat['idClient'];
    	$_SESSION['idClient2'] = $idClient2;
    	$_SESSION['solde2'] = $resultat['solde'];
    	$_SESSION['numCompte2'] = $resultat['numCompte'];
      $_SESSION['typeCompte2'] = $resultat['typeCompte'];
      $_SESSION['idCompte2'] = $resultat['idCompte'];

    		$sql="SELECT * FROM client  WHERE  idClient=:idClient";
			$stmt = $this->connect()->prepare($sql);
	    	$stmt->bindValue(':idClient', $idClient2, PDO::PARAM_STR);
	    	$stmt->execute();
	    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
	    	
	      $_SESSION['idClient2'] = $resultat['idClient'];
	      $_SESSION['nomCompte2'] = $resultat['nom'];
	      $_SESSION['prenomCompte2'] = $resultat['prenom'];
	      $_SESSION['adresseCompte2'] = $resultat['adresse'];
           	
		return $resultat;
	
	}

	/**
	 * fonction pour inserer les données de l'operation a la base de donnée
	**/
	public function addOperation(Operation $operation){
		$sql="INSERT INTO operation (idCompte,typeOperation,montantOperation,soldeAvant,soldeApres,compteDestinataire,dateOperation, idAgent) VALUES(:idcompte,:type,:montant,:soldeavant,:soldeapres,:comptedest,:dateope,:idagent)";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':idcompte', $operation->getIdCompte(), PDO::PARAM_STR);
		$stmt->bindValue(':type', $operation->getTypeOperation(), PDO::PARAM_STR);
		$stmt->bindValue(':montant', $operation->getMontantOperation(), PDO::PARAM_INT);
		$stmt->bindValue(':soldeavant', $operation->getSoldeAvant(), PDO::PARAM_INT);
		$stmt->bindValue(':soldeapres', $operation->getSoldeApres(), PDO::PARAM_INT);
		$stmt->bindValue(':comptedest', $operation->getCompteDestinataire(), PDO::PARAM_STR);
		$stmt->bindValue(':dateope', $operation->getDateOperation(), PDO::PARAM_INT);
		$stmt->bindValue(':idagent', $operation->getIdAgent(), PDO::PARAM_STR);
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");
	}
	
	/**
	 * fonction pour modifier le solde du client apres operation
	**/
	public function editSolde(Compte $compte){

		$sql="UPDATE compte set solde=:solde WHERE idCompte=:compte";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':solde', $compte->getSolde(), PDO::PARAM_INT);
		$stmt->bindValue(':compte', $compte->getidCompte(), PDO::PARAM_STR);
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");

	}

	/**
	 * fonction pour modifier les solde des 2 clients apres operation de virement
	**/
	public function editSolde2(Compte $compte2){

		$sql="UPDATE compte set solde=:solde WHERE idCompte=:compte";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':solde', $compte2->getSolde(), PDO::PARAM_INT);
		$stmt->bindValue(':compte', $compte2->getidCompte(), PDO::PARAM_STR);
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");

	}
	
}

?>