<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
require_once('database.php');
class OperationControle extends Database{
	
	/**
<<<<<<< HEAD
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
=======
	 * fonction pour verifiel le client
	 **/
	public function verification($compte){
		$sql="SELECT * FROM compte WHERE numCompte=:compte";
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
		$stmt = $this->connect()->prepare($sql);
    	$stmt->bindValue(':compte', $compte, PDO::PARAM_STR);
    	$stmt->execute();
    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
		
<<<<<<< HEAD
		session_start();
    	
    	$idClient = $resultat['idClient'];
    	$_SESSION['idClient'] = $idClient ;
    	$_SESSION['solde'] = $resultat['solde'];
    	$_SESSION['numCompte'] = $resultat['numCompte'];
      $_SESSION['typeCompte'] = $resultat['typeCompte'];
=======
    	$_SESSION['idClient'] = $resultat['idClient'];
    	$_SESSION['solde'] = $resultat['solde'];
    	$_SESSION['numCompte'] = $resultat['numCompte'];
      	$_SESSION['typeCompte'] = $resultat['typeCompte'];
      	$_SESSION['idCompte'] = $resultat['idCompte'];
    	$idClient = $_SESSION['idClient'];
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1

    		$sql="SELECT * FROM client  WHERE  idClient=:idClient";
			$stmt = $this->connect()->prepare($sql);
	    	$stmt->bindValue(':idClient', $idClient, PDO::PARAM_STR);
	    	$stmt->execute();
	    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
	    	
	      $_SESSION['idClient'] = $resultat['idClient'];
	      $_SESSION['nomCompte'] = $resultat['nom'];
	      $_SESSION['prenomCompte'] = $resultat['prenom'];
	      $_SESSION['adresseCompte'] = $resultat['adresse'];
<<<<<<< HEAD
	      $_SESSION['numCompte'] = $resultat['numCompte'];
           	
		return $resultat;

=======

	     
		return $resultat;
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	
	}
	/**
	 * fonction pour verifier le destinataire
	 **/
<<<<<<< HEAD
	public function verification2($compte2){
		$sql="SELECT * FROM clients  WHERE  numCompte=:compte";
		$stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(':compte', $compte2, PDO::PARAM_STR);
    	$stmt->execute();
    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);

    	session_start();
    	
       $_SESSION['idClient2'] = $resultat['idClient'];
       $_SESSION['idAgent2'] = $resultat['idAgent'];
       $_SESSION['idPersonne2'] = $resultat['idPersonne'];
       $_SESSION['matriculeClient2'] = $resultat['matriculeClient'];
       $_SESSION['numCompte2'] = $resultat['numCompte'];
       $_SESSION['solde2'] = $resultat['solde'];
       $_SESSION['typeCompte2'] = $resultat['typeCompte'];
           	
		return $resultat;

	
	}
=======
	
	public function verification2($compte2){
		$sql="SELECT * FROM compte  WHERE  numCompte=:compte";
		$stmt = $this->connect()->prepare($sql);
    	$stmt->bindValue(':compte', $compte2, PDO::PARAM_STR);
    	$stmt->execute();
    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    	
    	
    	$_SESSION['idClient2'] = $resultat['idClient'];
    	$_SESSION['solde2'] = $resultat['solde'];
    	$_SESSION['numCompte2'] = $resultat['numCompte'];
    	$_SESSION['typeCompte2'] = $resultat['typeCompte'];
    	$_SESSION['idCompte2'] = $resultat['idCompte'];
    	$idClient2 =$_SESSION['idClient2'];

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

>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	/**
	 * fonction pour inserer les données de l'operation a la base de donnée
	**/
	public function addOperation(Operation $operation){
<<<<<<< HEAD
		$sql="INSERT INTO operations (typeOperations,montant,soldeAvant,soldeApres,dateOperations,idClient, idAgent) VALUES(:type,:montant,:soldeavant,:soldeapres,:dateope,:idcli,:idagent)";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':type', $operation->getTypeOperation(), PDO::PARAM_STR);
		$stmt->bindValue(':montant', $operation->getMontant(), PDO::PARAM_INT);
		$stmt->bindValue(':soldeavant', $operation->getSoldeAvant(), PDO::PARAM_INT);
		$stmt->bindValue(':soldeapres', $operation->getSoldeApres(), PDO::PARAM_INT);
		$stmt->bindValue(':dateope', $operation->getDateOperation(), PDO::PARAM_INT);
		$stmt->bindValue(':idcli', $operation->getIdClient(), PDO::PARAM_STR);
=======
		$sql="INSERT INTO operation (idOperation,idCompte,typeOperation,montantOperation,soldeAvant,soldeApres,compteDestinataire,dateOperation, idAgent) VALUES(NULL,:idcompte,:type,:montant,:soldeavant,:soldeapres,:comptedest,:dateope,:idagent)";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':idcompte', $operation->getIdCompte(), PDO::PARAM_STR);
		$stmt->bindValue(':type', $operation->getTypeOperation(), PDO::PARAM_STR);
		$stmt->bindValue(':montant', $operation->getMontantOperation(), PDO::PARAM_INT);
		$stmt->bindValue(':soldeavant', $operation->getSoldeAvant(), PDO::PARAM_INT);
		$stmt->bindValue(':soldeapres', $operation->getSoldeApres(), PDO::PARAM_INT);
		$stmt->bindValue(':comptedest', $operation->getCompteDestinataire(), PDO::PARAM_STR);
		$stmt->bindValue(':dateope', $operation->getDateOperation(), PDO::PARAM_INT);
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
		$stmt->bindValue(':idagent', $operation->getIdAgent(), PDO::PARAM_STR);
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");
	}
	
	/**
	 * fonction pour modifier le solde du client apres operation
	**/
<<<<<<< HEAD
	public function editSolde(Client $client){

		$sql="UPDATE clients set solde=:solde WHERE idClient=:client";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':solde', $client->getSolde(), PDO::PARAM_INT);
		$stmt->bindValue(':client', $client->getidClient(), PDO::PARAM_STR);
=======
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
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");

	}
<<<<<<< HEAD
=======

	/**
	 * fonction pour recuperer les coordonnes de l'agent qui a fait l'opération
	
	public function infosagent($idAgent){
		$sql="SELECT * FROM agent WHERE idAgent=:agent";
		$stmt = $this->connect()->prepare($sql);
    	$stmt->bindValue(':agent', $idAgent, PDO::PARAM_INT);
    	$stmt->execute();
    	$resultat = $stmt->fetch(PDO::FETCH_ASSOC);
		session_start();
    	$_SESSION['idAgent'] = $resultat['idAgent'] ;
    	$_SESSION['nomAgent'] = $resultat['nom'];
    	$_SESSION['prenomAgent'] = $resultat['prenom'];
           	
		return $resultat;
	
	} **/
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	
}

?>