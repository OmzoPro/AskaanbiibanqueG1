<?php
require_once('database.php');
class ClientControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getClients(){
		$sql="SELECT * FROM client";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}



	public function addClients(Client $client){
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