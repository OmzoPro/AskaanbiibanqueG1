<?php
require_once('database.php');
class DetailControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getDetailAgents(){
		$sql="select * from client c,agent a,agence p,compte t,operation f where a.idAgence=p.idAgence and t.idClient=c.idClient and f.idCompte=t.idCompte and f.idAgent=a.idAgent; ";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

		public function getDetailAgences(){
		$sql="SELECT * FROM agence; ";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}


	public function getDetailClients(){
		$sql="SELECT * FROM client; ";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}


	
	
	}

	

?>