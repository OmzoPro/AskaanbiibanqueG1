<?php 
class Client{
	public $nom;
	public $prenom;
	public $naissance;
	public $sexe;
	public $adresse;
	public $telephone;
	public $email;
	public $dateCreation;
	public $cni;
    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct( $nom, $prenom, $naissance, $sexe, $adresse, $telephone, $email, $dateCreation, $cni){
		
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->naissance = $naissance;
		$this->sexe = $sexe;
		$this->adresse = $adresse;
		$this->telephone = $telephone;
		$this->email = $email;
		$this->dateCreation = $dateCreation;
		$this->cni = $cni;
		
	}

	/***
     *getters
     */
	
	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getNaissance(){
		return $this->naissance;
	}

	public function getSexe(){
		return $this->sexe;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function getTelephone(){
		return $this->telephone;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getDateCreation(){
		return $this->naissance;
	}

	public function getCni(){
		return $this->cni;
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

	public function setNaissance($naissance){
		$this->naissance = $naissance;
	}

	public function setSexe($sexe){
		$this->sexe = $sexe;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}

	public function setTelephone($telephone){
		$this->telephone = $telephone;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setDateCreation($dateCreation){
		$this->dateCreation = $dateCreation;
	}

	public function setCni($cni){
		$this->cni = $cni;
	}
	

}
?>