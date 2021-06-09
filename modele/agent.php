<?php 
class Agent{
	private $idAgent;
	private $idAgence;
	private $nom;
	private $prenom;
	private $adresse;
	private $telephone;
	private $naissance;
	private $dateCreation;
	private $sexe;
	private $email;

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($idAgent,$idAgence,$nom,$prenom,$adresse,$telephone,$naissance,$dateCreation,$sexe,$email){
		$this->idAgent = $idAgent;
		$this->idAgence = $idAgence;
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->adresse = $adresse;
		$this->telephone = $telephone;
		$this->naissance = $naissance;
		$this->dateCreation = $dateCreation;
		$this->sexe = $sexe;
		$this->email = $email;
	}

	/***
     *getters
     */
	public function getIdAgent(){
		return $this->idAgent;
	}
	public function getIdAgence(){
		return $this->idAgence;
	}
	public function getNom(){
		return $this->nom;
	}
	public function getPrenom(){
		return $this->prenom;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function getTelephone(){
		return $this->telephone;
	}

	public function getNaissance(){
		return $this->naissance;
	}

	public function getDateCreation(){
		return $this->dateCreation;
	}

	public function getSexe(){
		return $this->sexe;
	}

	public function getEmail(){
		return $this->email;
	}
	
	/***
     *setters
     */
	public function setIdAgent($idAgent){
		$this->idAgent = $idAgent;
	}

	public function setIdAgence($idAgence){
		$this->idAgence = $idAgence;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}

	public function setTelephone($telephone){
		$this->telephone = $telephone;
	}

	public function setNaissance($naissance){
		$this->naissance = $naissance;
	}

	public function setDateCreation($dateCreation){
		$this->dateCreation = $dateCreation;
	}

	public function setSexe($sexe){
		$this->sexe = $sexe;
	}

	public function setEmail($email){
		$this->email = $email;
	}

}
?>