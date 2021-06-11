<?php
require_once('database.php');
class AgentControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getAgents(){
		$sql="select idAgent,nomAgent, prenomAgent, adresseAgent, telephoneAgent,t.nomAgence,a.idAgent from agent a,agence t  where a.idAgence=t.idAgence; ";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

public function addAgents(Agent $agent){
		$sql="INSERT INTO agent(nomAgent,prenomAgent,emailAgent,adresseAgent,sexe,telephoneAgent,naissanceAgent,dateCreaAgent)
		VALUES(:nomAgent,:prenomAgent,:emailAgent,:adresseAgent,:sexe,:telephoneAgent,:naissanceAgent,:dateCreaAgent);";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':nomAgent', $agent->getNom(), PDO::PARAM_STR);
		$stmt->bindValue(':prenomAgent', $agent->getPrenom(), PDO::PARAM_STR);
		$stmt->bindValue(':emailAgent', $agent->getEmail(), PDO::PARAM_STR);
		$stmt->bindValue(':adresseAgent', $agent->getAdresse(), PDO::PARAM_STR);
		$stmt->bindValue(':sexe', $agent->getSexe(), PDO::PARAM_STR);
		$stmt->bindValue(':telephoneAgent', $agent->getTelephone(), PDO::PARAM_STR);
		$stmt->bindValue(':naissanceAgent', $agent->getDateNaissance(), PDO::PARAM_STR);
		$stmt->bindValue(':dateCreaAgent', $agent->getDateCreation(), PDO::PARAM_STR);
		

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
	/**
	 * fonction pour s'authentifier avec un  roles précis
	 * public function authentication($email,$password){
		$sql="SELECT * FROM personnes  WHERE  email=:email AND password=:password";
		$stmt  =$this->connect()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->bindValue(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
           $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 
           //session_start();
          // $role = $resultat['role'];
          // $_SESSION['roleAuth'] = $role;
          
           	
			return $resultat;
}
		 **/
	
	

?>