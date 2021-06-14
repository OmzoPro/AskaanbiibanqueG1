<?php
require_once('database.php');
class Editclient extends Database{
	 if (isset($_GET['id'])) {
        $idClient = $_GET['id'];
    }
	/**
	 * fonction pour verifiel le client
	 **/
	public function verify($client){
	
		$sql = 'SELECT * FROM client WHERE idClient=:idClient';
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindValue(':idClient', $idClient, PDO::PARAM_INT);
    	$stmt->execute();
    	$person = $stmt->fetch(PDO::FETCH_ASSOC);
    	$idClient = $person['idClient'];
    	$nom = $person['nom'];
    	$prenom = $person['prenom'];
    	$adresse = $person['adresse'];
    	$telephone = $person['telephone'];
    	$email = $person['email'];
    	$naissance = $person['naissance'];
    	$sexe = $person['sexe'];
    	$dateCreation = $person['dateCreation'];
    	$cni = $person['cni'];
	
}
}

?>