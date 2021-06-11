<?php 
class Client{
<<<<<<< HEAD
	
	public $nom;
	public $prenom;
	public $adresse;
	public $telephone;
	public $naissance;
	public $email;
	public $sexe;
	public $cni;
	public $dateCreation;
	
	
=======
	private $idClient;
	private $idAgent;
	private $idPersonne;
	private $matriculeClient;
	private $numCompte;
	private $solde;
	private $typeCompte;
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1

    /***
     *contructeur avec les parametres des variables declares 
     */
<<<<<<< HEAD
	function __construct($nom,$prenom,$adresse,$telephone,$email,$naissance,$dateCreation,$cni,$sexe){
	    $this->nom = $nom;
		$this->prenom = $prenom;
		
		$this->adresse = $adresse;
		$this->telephone = $telephone;
		$this->email = $email;
		$this->naissance = $naissance;
		$this->dateCreation = $dateCreation;
		$this->cni = $cni;
		$this->sexe = $sexe;
		

		

=======
	function __construct($idClient,$idAgent,$idPersonne,$matriculeClient,$numCompte,$solde,$typeCompte){
		$this->idClient = $idClient;
		$this->idAgent = $idAgent;
		$this->idPersonne = $idPersonne;
		$this->matriculeClient = $matriculeClient;
		$this->numCompte = $numCompte;
		$this->solde = $solde;
		$this->typeCompte = $typeCompte;
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	}

	/***
     *getters
     */
<<<<<<< HEAD
	
	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function getSexe(){
		return $this->sexe;
	}
	public function getCni(){
		return $this->cni;
	}

	public function getTelephone(){
		return $this->telephone;
	}
	public function getDateNaissance(){
		return $this->naissance;
	}

	public function getDateCreation(){
		return $this->dateCreation;
	}

	/***
     *setters
     */


	public function setNom($nom){
		$this->nom = $nom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}
	
	public function setSexe($sexe){
		$this->sexe = $sexe;
	}
	public function setCni($cni){
		$this->cni = $cni;
	}
	public function setTelephone($telephone){
		$this->telephone = $telephone;
	}

	public function setDateNaissance($naissance){
		$this->naissance = $naissance;
	}
	public function setDateCreation($dateCreation){
		$this->dateCreation = $dateCreation;
	}
	


}
 ?>
=======
	public function getIdClient(){
		return $this->idClient;
	}

	public function getIdAgent(){
		return $this->idAgent;
	}

	public function getIdPersonne(){
		return $this->idPersonne;
	}

	public function getMatriculeClient(){
		return $this->matriculeClient;
	}

	public function getNumCompte(){
		return $this->numCompte;
	}

	public function getSolde(){
		return $this->solde;
	}

	public function getTypeCompte(){
		return $this->typeCompte;
	}
	
	/***
     *setters
     */
	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

	public function setIdAgent($idAgent){
		$this->idAgent = $idAgent;
	}

	public function setIdPersonne($idPersonne){
		$this->idPersonne = $idPersonne;
	}

	public function setMatriculeClient($matriculeClient){
		$this->matriculeClient = $matriculeClient;
	}

	public function setNumCompte($numCompte){
		$this->numCompte = $numCompte;
	}

	public function setSolde($solde){
		$this->solde = $solde;
	}

	public function setTypeCompte($typeCompte){
		$this->typeCompte = $typeCompte;
	}

}
?>
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
