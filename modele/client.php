<?php 
class Client{
	
	public $idClient;	
	public $nom;
	public $prenom;
	public $adresse;
	public $telephone;
	public $naissance;
	public $email;
	public $sexe;
	public $cni;
	public $dateCreation;
	
	

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($idClient,$nom,$prenom,$adresse,$telephone,$email,$naissance,$dateCreation,$cni,$sexe){
	    $this->nom = $nom;
	    $this->idClient = $idClient;
		$this->prenom = $prenom;
		$this->adresse = $adresse;
		$this->telephone = $telephone;
		$this->email = $email;
		$this->naissance = $naissance;
		$this->dateCreation = $dateCreation;
		$this->cni = $cni;
		$this->sexe = $sexe;

	}

	/***
     *getters
     */
	
	public function getIdClient(){
		return $this->idClient;
	}

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
	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

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
