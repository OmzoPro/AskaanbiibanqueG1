<?php
require_once('database.php');
class UseControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getUsers(){
		$sql="SELECT * FROM user";
		$stmt= $this->connect()->prepare($sql);
		$stmt->execute();
		while ($result = $stmt->fetchAll()) {
			return $result;
		}
	}
	/**
	 * fonction pour inserer les users a la base de donnée
	 **/
	public function addUsers(User $user){
        $sql="INSERT INTO user(mon,password,role) VALUES(:mon,:pass,:role)";
        $stmt= $this->connect()->prepare($sql);
        $stmt->bindValue(':mon', $user->getMon(), PDO::PARAM_STR);
        $stmt->bindValue(':pass', $user->getPassword(), PDO::PARAM_STR);
        $stmt->bindValue(':role', $user->getRole(), PDO::PARAM_STR);
        $stmt->execute();
        header("location: {$_SERVER['HTTP_REFERER']}");
    }
	/**
	 * fonction pour s'authentifier avec un  roles précis
	 **/
	public function authentification($login,$password){
	$sql="SELECT * FROM user  WHERE  login=:login AND password=:password";
	$stmt = $this->connect()->prepare($sql);
       $stmt->bindValue(':login', $login, PDO::PARAM_STR);
  	$stmt->bindValue(':password', $password, PDO::PARAM_STR);
       $stmt->execute();
       $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 
       session_start();
       $idUser = $resultat['idUser'];
       $role = $resultat['role'];
       $idAgent = $resultat['idAgent'];
       $idClient = $resultat['idClient'];
       $_SESSION['idUser'] = $idUser;
       $_SESSION['role'] = $role;
       $_SESSION['idAgent'] = $idAgent;
       $_SESSION['idClient'] = $idClient;      
           	
	

	if (($role=="agent") OR ($role=="chef_agent")) {
	$sql="SELECT * FROM agent  WHERE  idAgent=:idAgent";
	$stmt = $this->connect()->prepare($sql);
       $stmt->bindValue(':idAgent', $idAgent, PDO::PARAM_STR);
       $stmt->execute();
       $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 

       $idAgent = $resultat['idAgent'];
       $idAgence = $resultat['idAgence'];
       $nom = $resultat['nom'];
       $prenom = $resultat['prenom'];
       $adresse = $resultat['adresse'];
       $telephone = $resultat['telephone'];
       $naissance = $resultat['naissance'];
       $dateCreation = $resultat['dateCreation'];
       $sexe = $resultat['sexe'];
       $email = $resultat['email'];
       $grade = $resultat['grade'];

       $_SESSION['idAgent'] = $idAgent;
       $_SESSION['idAgence'] = $idAgence;
       $_SESSION['nom'] = $nom;
       $_SESSION['prenom'] = $prenom;
       $_SESSION['adresse'] = $adresse;
       $_SESSION['telephone'] = $telephone;
       $_SESSION['naissance'] = $naissance;
       $_SESSION['dateCreation'] = $dateCreation;
       $_SESSION['sexe'] = $sexe;
       $_SESSION['email'] = $email;
       $_SESSION['grade'] = $grade;

	}elseif ($role=="client") {
	$sql="SELECT * FROM client  WHERE  idClient=:idClient";
	$stmt = $this->connect()->prepare($sql);
       $stmt->bindValue(':idClient', $idClient, PDO::PARAM_STR);
       $stmt->execute();
       $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 

       $idClient = $resultat['idClient'];
       $nom = $resultat['nom'];
       $prenom = $resultat['prenom'];
       $adresse = $resultat['adresse'];
       $telephone = $resultat['telephone'];
       $email = $resultat['email'];
       $naissance = $resultat['naissance'];
       $dateCreation = $resultat['dateCreation'];
       $sexe = $resultat['sexe'];
       $cni = $resultat['cni'];
       
       $_SESSION['idClient'] = $idClient;
       $_SESSION['nom'] = $nom;
       $_SESSION['prenom'] = $prenom;
       $_SESSION['adresse'] = $adresse;
       $_SESSION['telephone'] = $telephone;
       $_SESSION['email'] = $email;
       $_SESSION['naissance'] = $naissance;
       $_SESSION['dateCreation'] = $dateCreation;
       $_SESSION['sexe'] = $sexe;
       $_SESSION['cni'] = $cni;
  
		}
		return $resultat;
	}

}

?>