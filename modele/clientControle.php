<?php
require_once('database.php');
class ClientControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getClients(){
		$sql="SELECT * from client p, compte c where c.idClient=p.idClient;";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getClient(){
		$sql="SELECT * FROM client WHERE idClient=:idClient";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':idClient', $idClient, PDO::PARAM_INT);
    	$stmt->execute();
    	while ($person = $stmt->fetchAll()) {
			return $person;
		}
	}



	public function addClients(Client $client, compte $compte,User $user){
		$sql="INSERT INTO Client(nom,prenom,adresse,telephone,email,naissance,dateCreation,cni,sexe)
		VALUES(:nom,:prenom,:adresse,:telephone,:email,:naissance,:dateCrea,:cni,:sexe);";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':nom', $client->getNom(), PDO::PARAM_STR);
		$stmt->bindValue(':prenom', $client->getPrenom(), PDO::PARAM_STR);
		$stmt->bindValue(':email', $client->getEmail(), PDO::PARAM_STR);
		$stmt->bindValue(':adresse', $client->getAdresse(), PDO::PARAM_STR);
		$stmt->bindValue(':sexe', $client->getSexe(), PDO::PARAM_STR);
		$stmt->bindValue(':cni', $client->getCni(), PDO::PARAM_STR);
		$stmt->bindValue(':telephone', $client->getTelephone(), PDO::PARAM_STR);
		$stmt->bindValue(':naissance', $client->getDateNaissance(), PDO::PARAM_STR);
		$stmt->bindValue(':dateCrea', $client->getDateCreation(), PDO::PARAM_STR);
		$stmt->execute();

		$sql3="SELECT max(idClient) from client";
		$stmt3=$this->connect()->prepare($sql3);
		$stmt3->execute();
		$lastid=$stmt3->fetchColumn();

		$sql2="INSERT INTO compte(idClient,numCompte,solde,typeCompte)
		VALUES(:idClient,:numCompte,:solde,:typeCompte)";
        
		$stmt1= $this->connect()->prepare($sql2); //le chemin pour se connecté a la BD
		$stmt1->bindValue(':idClient', $lastid, PDO::PARAM_STR);
		$stmt1->bindValue(':numCompte', $compte->getNumCompte(), PDO::PARAM_STR);
		$stmt1->bindValue(':typeCompte', $compte->getTypeCompte(), PDO::PARAM_STR);
        $stmt1->bindValue(':solde', $compte->getSolde(), PDO::PARAM_STR);
		$stmt1->execute(); //On exécute la requête  **/

		$sql4="INSERT INTO user(idClient,login,password,role) VALUES(:idClient,:login,:pass,:role)";
		
		$stmt5= $this->connect()->prepare($sql4);
		$stmt5->bindValue(':idClient', $lastid, PDO::PARAM_STR);
		$stmt5->bindValue(':login', $user->getLogin(), PDO::PARAM_STR);
		$stmt5->bindValue(':pass', $user->getPassword(), PDO::PARAM_STR);
		$stmt5->bindValue(':role', $user->getRole(), PDO::PARAM_STR);
		$stmt5->execute();

		header("location: {$_SERVER['HTTP_REFERER']}");
	}
		
	/**
	 * fonction pour supprimer agnent avec un  id
	 * public function deleteAgents($id){
		$sql = $this->connect()->prepare("DELETE FROM personnes WHERE idPersonne = :idPersonne;");
		$sql->bindValue(':idPersonne', $id, PDO::PARAM_STR);
		return $sql->execute();
	 **/
	
	
	
	}
	
	
	

?>