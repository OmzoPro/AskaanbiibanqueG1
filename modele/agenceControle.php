<?php
require_once('database.php');
class AgenceControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getAgences(){
		$sql="SELECT * FROM agence; ";
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
		
		$stmt->bindValue(':telephone', $agence->getTelephone(), PDO::PARAM_STR);
		
		$stmt->bindValue(':dateCreation', $agence->getDateCreation(), PDO::PARAM_STR);
		

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