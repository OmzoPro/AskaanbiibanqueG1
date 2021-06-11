<?php
require_once('database.php');
class ClientControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getClient(){
		$sql="select c.idClient, nom, prenom, telephone, adresse, numCompte, solde from client c, compte p where c.idClient=p.idClient;";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}


public function addClient(Client $client) /**Compte $compte)**/{
		
		$sql="INSERT INTO client(nom,prenom,naissance,sexe,adresse,telephone,email,dateCreation,cni)
		VALUES(:nom,:prenom,:naissance,:sexe,:adresse,:telephone,:email,:dateCreation,:cni);";


		$stmt= $this->connect()->prepare($sql); //le chemin pour se connecté a la BD
		$stmt->bindValue(':nom', $client->getNom(), PDO::PARAM_STR);
		$stmt->bindValue(':prenom', $client->getPrenom(), PDO::PARAM_STR);
		$stmt->bindValue(':naissance', $client->getNaissance(), PDO::PARAM_STR);
		$stmt->bindValue(':sexe', $client->getSexe(), PDO::PARAM_STR);
		$stmt->bindValue(':adresse', $client->getAdresse(), PDO::PARAM_STR);
		$stmt->bindValue(':telephone', $client->getTelephone(), PDO::PARAM_STR);
		$stmt->bindValue(':email', $client->getEmail(), PDO::PARAM_STR);
		$stmt->bindValue(':dateCreation', $client->getDateCreation(), PDO::PARAM_STR);
		$stmt->bindValue(':cni', $client->getCni(), PDO::PARAM_STR);	
		
		if($stmt->execute){
        return  $this->connect()->lastInsertId();
		}
		/**$theID =$this->connect()->lastInsertid();
        
		$stmt= $this->connect()->prepare($sql); //le chemin pour se connecté a la BD
		$stmt->bindValue(':idClient', $theID, PDO::PARAM_STR);
		$stmt->bindValue(':numCompte', $compte->getNumCompte(), PDO::PARAM_STR);
		$stmt->bindValue(':typeCompte', $compte->getTypeCompte(), PDO::PARAM_STR);
        $stmt->bindValue(':solde', $compte->getSolde(), PDO::PARAM_STR);
		$stmt->execute(); //On exécute la requête  **/
		header("location: {$_SERVER['HTTP_REFERER']}");
	}
    
	/**
	 * fonction pour s'authentifier avec un  roles précis
	 **/
    /*** 
	public function authentication($email,$password){
		$sql="SELECT * FROM personnes  WHERE  email=:email AND password=:password";
		$stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->bindValue(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
           $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
           //session_start();
          // $role = $resultat['role'];
          // $_SESSION['roleAuth'] = $role;
			return $resultat;
}
*/
}
?>