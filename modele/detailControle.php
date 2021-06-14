<?php
require_once('database.php');
class DetailControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getDetailAgents(){
		$sql="SELECT a.* FROM client c,agent a,agence p,compte t,operation f WHERE (a.idAgence=p.idAgence AND t.idClient=c.idClient AND f.numCompte=t.numCompte AND f.idAgent=a.idAgent)";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

		public function getDetailAgences(){
		$sql="SELECT p.* FROM client c,agent a,agence p,compte t,operation f WHERE a.idAgence=p.idAgence and t.idClient=c.idClient and f.numCompte=t.numCompte and f.idAgent=a.idAgent; ";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}


	public function getDetailClients(){
		$sql="SELECT c.*,t.numCompte FROM client c,agent a,agence p,compte t,operation f WHERE a.idAgence=p.idAgence and t.idClient=c.idClient and f.numCompte=t.numCompte and f.idAgent=a.idAgent; ";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}


	
	
	}

	

?>