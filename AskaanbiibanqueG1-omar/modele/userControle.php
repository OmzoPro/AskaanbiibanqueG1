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
    $sql="SELECT * FROM user WHERE  login=:login AND password=:password";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 
       session_start();
    $_SESSION['idUser'] = $resultat['idUser'];
    $_SESSION['role'] = $resultat['role'];
    $_SESSION['idAgent'] = $resultat['idAgent'];
    $_SESSION['idClient'] = $resultat['idClient'];
    $role= $_SESSION['role'];
    $idAgent=$_SESSION['idAgent'];
    $idClient= $_SESSION['idClient'];
    

    if (($role=="agent") OR ($role=="chef_agent")) {
    $sql="SELECT * FROM agent WHERE idAgent=:idAgent";
    $stmt = $this->connect()->prepare($sql);
       $stmt->bindValue(':idAgent', $idAgent, PDO::PARAM_STR);
       $stmt->execute();
       $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 

       $_SESSION['idAgent'] = $resultat['idAgent'];
       $_SESSION['idAgence'] = $resultat['idAgence'];
       $_SESSION['nomAgentCon'] = $resultat['nom'];
       $_SESSION['prenomAgentCon'] = $resultat['prenom'];
       $_SESSION['adresseAgent'] = $resultat['adresse'];
       $_SESSION['telephoneAgent'] = $resultat['telephone'];
       $_SESSION['naissanceAgent'] = $resultat['naissance'];
       $_SESSION['dateCreationAgent'] = $resultat['dateCreation'];
       $_SESSION['sexeAgent'] = $resultat['sexe'];
       $_SESSION['emailAgent'] = $resultat['email'];
       $_SESSION['grade'] = $resultat['grade'];
       $idAgence=$_SESSION['idAgence'];

            $sql="SELECT * FROM agence WHERE idAgence=:idAgence";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindValue(':idAgence', $idAgence, PDO::PARAM_STR);
            $stmt->execute();
            $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 
               
            $_SESSION['nomAgence'] = $resultat['nomAgence'];
            $_SESSION['adresseAgence'] = $resultat['adresse'];
            $_SESSION['telephoneAgence'] = $resultat['telephone'];

    }
    if ($role=="client") {
    $sql="SELECT * FROM client WHERE idClient=:idClient";
    $stmt = $this->connect()->prepare($sql);
   $stmt->bindValue(':idClient', $idClient, PDO::PARAM_STR);
   $stmt->execute();
   $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 
   
       $_SESSION['idClient'] = $resultat['idClient'];
       $_SESSION['nomCon'] = $resultat['nom'];
       $_SESSION['prenomCon'] = $resultat['prenom'];
       $_SESSION['adresse'] = $resultat['adresse'];
       $_SESSION['telephone'] = $resultat['telephone'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['naissance'] = $resultat['naissance'];
       $_SESSION['sexe'] = $resultat['sexe'];
       $_SESSION['dateCreation'] = $resultat['dateCreation'];
       $_SESSION['cni'] = $resultat['cni'];

        $sql="SELECT * FROM compte WHERE idClient=:idClient";
            $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(':idClient', $idClient, PDO::PARAM_STR);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC); 
   
       $_SESSION['solde'] = $resultat['solde'];
  
        }   
    return $resultat;
    }

}

?>