<?php
require_once('database.php');
class AgentControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getAgents(){
		$sql="SELECT idAgent,nom, prenom, grade, a.adresse, a.telephone,t.nomAgence,a.idAgent FROM agent a,agence t  WHERE a.idAgence=t.idAgence; ";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

	public function getAgent(){
		$sql="SELECT idAgent,nom, prenom, grade, a.adresse, a.telephone,t.nomAgence,a.idAgent FROM agent a,agence t  WHERE a.idAgence=t.idAgence AND t.nomAgence=:nom AND grade='agent'";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':nom', $_SESSION['nomAgence'], PDO::PARAM_STR);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}

	public function editAgents(Agent $agent){
 
			$sql="UPDATE agent set nom=:nm, prenom=:prn, adresse=:adrs, telephone=:tel, naissance=:nais, dateCreation=:datecrea,  sexe=:sex , email=:mail WHERE idAgent=:idAgent";
			$stmt= $this->connect()->prepare($sql);
			$stmt->bindValue(':nm', $agent->getNom(), PDO::PARAM_STR);
			$stmt->bindValue(':prn', $agent->getPrenom(), PDO::PARAM_STR);
			$stmt->bindValue(':adrs', $agent->getAdresse(), PDO::PARAM_STR);
			$stmt->bindValue(':tel', $agent->getTelephone(), PDO::PARAM_INT);
			$stmt->bindValue(':nais', $agent->getDateNaissance(), PDO::PARAM_STR);
			$stmt->bindValue(':datecrea', $agent->getDateCreation(), PDO::PARAM_STR);
			$stmt->bindValue(':sex', $agent->getSexe(), PDO::PARAM_STR);
			$stmt->bindValue(':mail', $agent->getEmail(), PDO::PARAM_STR);
			$stmt->bindValue(':idAgent', $agent->getIdAgent(), PDO::PARAM_INT);
			$stmt->execute();
			header("location: {$_SERVER['HTTP_REFERER']}");

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
public function addAgents(Agent $agent ,User $user){
		$sql="INSERT INTO agent(idAgence,nom,prenom,email,adresse,sexe,grade,telephone,naissance,dateCreation)
		VALUES(:idAgence,:nomAgent,:prenomAgent,:emailAgent,:adresseAgent,:sexe,:grade,:telephoneAgent,:naissanceAgent,:dateCreaAgent);";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':idAgence', $agent->getIdAgence(), PDO::PARAM_INT);
		$stmt->bindValue(':nomAgent', $agent->getnom(), PDO::PARAM_STR);
		$stmt->bindValue(':prenomAgent', $agent->getPrenom(), PDO::PARAM_STR);
		$stmt->bindValue(':emailAgent', $agent->getEmail(), PDO::PARAM_STR);
		$stmt->bindValue(':adresseAgent', $agent->getAdresse(), PDO::PARAM_STR);
		$stmt->bindValue(':sexe', $agent->getSexe(), PDO::PARAM_STR);
		$stmt->bindValue(':grade', $agent->getGrade(), PDO::PARAM_STR);
		$stmt->bindValue(':telephoneAgent', $agent->getTelephone(), PDO::PARAM_INT);
		$stmt->bindValue(':naissanceAgent', $agent->getDateNaissance(), PDO::PARAM_STR);
		$stmt->bindValue(':dateCreaAgent', $agent->getDateCreation(), PDO::PARAM_STR);
		$stmt->execute();

		$sql3="SELECT max(idAgent) from agent";
		$stmt3=$this->connect()->prepare($sql3);
		$stmt3->execute();
		$lastidagent=$stmt3->fetchColumn();

		$sql2="INSERT INTO user(idAgent,login,password,role) VALUES(:idAgent,:login,:pass,:role)";
		
		$stmt2= $this->connect()->prepare($sql2);
		$stmt2->bindValue(':idAgent', $lastidagent, PDO::PARAM_INT);
		$stmt2->bindValue(':login', $user->getLogin(), PDO::PARAM_STR);
		$stmt2->bindValue(':pass', $user->getPassword(), PDO::PARAM_STR);
		$stmt2->bindValue(':role', $user->getRole(), PDO::PARAM_STR);
		$stmt2->execute();
		
		header("location: {$_SERVER['HTTP_REFERER']}");
	}

}

?>