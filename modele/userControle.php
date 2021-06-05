<?php 
require_once('database.php');
class UseControle extends Database{
	/**
	 * fonction pour recuperer tous les enregistrements de user
	 **/
	public function getUsers(){
		$sql="SELECT * FROM personnes";
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
		$sql="INSERT INTO personnes(nom,prenom,email,passWord) VALUES(:prenom,:nom,:login,:pass)";
		$stmt= $this->connect()->prepare($sql);
		$stmt->bindValue(':nom', $user->getNom(), PDO::PARAM_STR);
		$stmt->bindValue(':prenom', $user->getPrenom(), PDO::PARAM_STR);
		$stmt->bindValue(':login', $user->getLogin(), PDO::PARAM_STR);
		$stmt->bindValue(':pass', $user->getPassword(), PDO::PARAM_STR);
		$stmt->execute();
		header("location: {$_SERVER['HTTP_REFERER']}");
	}
	/**
	 * fonction pour s'authentifier avec un  roles précis
	 **/
	public function authentification($login,$password){
	$sql="SELECT * FROM personnes  WHERE  email=:login AND passWord=:password";
	$stmt = $this->connect()->prepare($sql);
       $stmt->bindValue(':login', $login, PDO::PARAM_STR);
  	$stmt->bindValue(':password', $password, PDO::PARAM_STR);
       $stmt->execute();
       $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 
       session_start();
       $role = $resultat['fonction'];
       $prenom = $resultat['prenom'];
       $nom = $resultat['nom'];
       $_SESSION['role'] = $role;

       $_SESSION['prenom'] = $prenom;
       $_SESSION['nom'] = $nom;
          
           	
	return $resultat;

	
	}
}

?>