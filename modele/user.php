<?php
class User{
	private $nom;
	private $prenom;
	private $fonction;
	private $adresse;
	private $date_naissance;
	private $telephone;
	private $email;
	private $password;
	private $cni;
	private $sexe;

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($nom,$prenom,$fonction,$adresse,$date_naissance,$telephone,$email,$password,$cni,$sexe){
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->fonction = $fonction;
		$this->adresse = $adresse;
		$this->date_naissance = $date_naissance;
		$this->telephone = $telephone;
		$this->email = $email;
		$this->password = $password;
		$this->cni = $cni;
		$this->sexe = $sexe;
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

	public function getFonction(){
		return $this->fonction;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function getDate_naissance(){
		return $this->date_naissance;
	}

	public function getTelephone(){
		return $this->telephone;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getCni(){
		return $this->cni;
	}

	public function getSexe(){
		return $this->sexe;
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

	public function setFonction($fonction){
		$this->fonction = $fonction;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}

	public function setDate_naissance($date_naissance){
		$this->date_naissance = $date_naissance;
	}

	public function setTelephone($telephone){
		$this->telephone = $telephone;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setCni($cni){
		$this->cni = $cni;
	}

	public function setSexe($sexe){
		$this->sexe = $sexe;
	}


}
?>