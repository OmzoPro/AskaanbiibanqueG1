<?php 
class Agent{
	public $nomAgent;
	public $prenomAgent;
	public $adresseAgent;
	public $telephoneAgent;
	public $naissanceAgent;
	public $emailAgent;
	public $sexe;
	public $dateCreaAgent;
	
	

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($nomAgent,$prenomAgent,$emailAgent,$adresseAgent,$sexe,$telephoneAgent,$naissanceAgent,$dateCreaAgent){
		
		$this->nomAgent = $nomAgent;
		$this->prenomAgent = $prenomAgent;
		$this->emailAgent = $emailAgent;
		$this->adresseAgent = $adresseAgent;
		$this->sexe = $sexe;
		$this->telephoneAgent = $telephoneAgent;
		$this->naissanceAgent = $naissanceAgent;
		$this->dateCreaAgent = $dateCreaAgent;
		

	}

	/***
     *getters
     */
	
	public function getNom(){
		return $this->nomAgent;
	}

	public function getPrenom(){
		return $this->prenomAgent;
	}

	public function getEmail(){
		return $this->emailAgent;
	}

	public function getAdresse(){
		return $this->adresseAgent;
	}

	public function getSexe(){
		return $this->sexe;
	}

	public function getTelephone(){
		return $this->telephoneAgent;
	}
	public function getDateNaissance(){
		return $this->naissanceAgent;
	}

	public function getDateCreation(){
		return $this->dateCreaAgent;
	}

	/***
     *setters
     */

	public function setNom($nomAgent){
		$this->nomAgent = $nomAgent;
	}

	public function setPrenom($prenomAgent){
		$this->prenomAgent = $prenomAgent;
	}

	public function setEmail($emailAgent){
		$this->emailAgent = $emailAgent;
	}

	public function setAdresse($adresseAgent){
		$this->adresseAgent = $adresseAgent;
	}
	
	public function setSexe($sexe){
		$this->sexe = $sexe;
	}
	public function setTelephone($telephoneAgent){
		$this->telephoneAgent = $telephone;
	}

	public function setDateNaissance($naissanceAgent){
		$this->naissanceAgent = $naissanceAgent;
	}
	public function setDateCreation($dateCreaAgent){
		$this->dateCreaAgent = $dateCreaAgent;
	}
	


}
 ?>
