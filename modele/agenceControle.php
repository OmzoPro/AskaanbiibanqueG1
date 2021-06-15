<?php
require_once('database.php');
class AgenceControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getAgences(){
		$sql="SELECT * FROM agence";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

	public function getAgence(){
		$sql="SELECT nomAgence, a.idAgence FROM agence a, agent t WHERE a.idAgence!=t.idAgence";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

	public function deleteAgent(){
$idAgent = $_GET['id'];
$sql = 'DELETE FROM agent WHERE idAgent=:idAgent';
$stmt= $this->connect()->prepare($sql);
    $stmt->execute();
    while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

public function addAgences(Agence $agence){
		$sql="INSERT INTO agence(nomAgence,email,adresse,telephone,dateCreation)
		VALUES(:nomAgence,:email,:adresse,:telephone,:dateCreation);";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':nomAgence', $agence->getNom(), PDO::PARAM_STR);
		$stmt->bindValue(':email', $agence->getEmail(), PDO::PARAM_STR);
		$stmt->bindValue(':adresse', $agence->getAdresse(), PDO::PARAM_STR);
		$stmt->bindValue(':telephone', $agence->getTelephone(), PDO::PARAM_INT);
		$stmt->bindValue(':dateCreation', $agence->getDateCreation(), PDO::PARAM_STR);
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");
	}

	public function editAgences(Agence $agence){
 $sql = 'UPDATE agence SET nomAgence=:nomAgent, email=:emailAgent, telephone=:telephoneAgent, adresse=:adresseAgent WHERE idAgence=:idAgent';
 

			$sql="UPDATE agence set nomAgence=:nm, email=:mail, telephone=:tel, adresse=:adrs, dateCreation=:datecrea WHERE idAgence=:idAgence";
			$stmt= $this->connect()->prepare($sql);
			$stmt->bindValue(':nm', $agence->getNom(), PDO::PARAM_STR);
			$stmt->bindValue(':mail', $agence->getEmail(), PDO::PARAM_STR);
			$stmt->bindValue(':tel', $agence->getTelephone(), PDO::PARAM_INT);
			$stmt->bindValue(':adrs', $agence->getAdresse(), PDO::PARAM_STR);
			$stmt->bindValue(':datecrea', $agence->getDateCreation(), PDO::PARAM_STR);
			$stmt->bindValue(':idAgence', $agence->getIdAgence(), PDO::PARAM_INT);
			$stmt->execute();
			header("location: {$_SERVER['HTTP_REFERER']}");

		}
	
	}
	
	

?>