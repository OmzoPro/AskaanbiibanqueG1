<?php 
class Agent{
	public $idAgent;
	public $idAgence;
	public $nomAgent;
	public $prenomAgent;
	public $adresseAgent;
	public $telephoneAgent;
	public $naissanceAgent;
	public $emailAgent;
	public $sexe;
	public $grade;
	public $dateCreaAgent;
	
	

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($idAgent,$idAgence,$nomAgent,$prenomAgent,$emailAgent,$adresseAgent,$sexe,$grade,$telephoneAgent,$naissanceAgent,$dateCreaAgent){

	    $this->idAgent = $idAgent;
	    $this->idAgence = $idAgence;
	    $this->nomAgent = $nomAgent;
		$this->prenomAgent = $prenomAgent;
		$this->emailAgent = $emailAgent;
		$this->adresseAgent = $adresseAgent;
		$this->sexe = $sexe;
		$this->grade = $grade;
		$this->telephoneAgent = $telephoneAgent;
		$this->naissanceAgent = $naissanceAgent;
		$this->dateCreaAgent = $dateCreaAgent;
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
	public function getGrade(){
		return $this->grade;
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

	public function setIdAgent($idAgent){
		$this->idAgent = $idAgent;
	}

	public function setIdAgence($idAgence){
		$this->idAgence = $idAgence;
	}

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
	public function setGrade($grade){
		$this->grade = $grade;
	}
	public function setTelephone($telephoneAgent){
		$this->telephoneAgent = $telephoneAgent;
	}

	public function setDateNaissance($naissanceAgent){
		$this->naissanceAgent = $naissanceAgent;
	}
	public function setDateCreation($dateCreaAgent){
		$this->dateCreaAgent = $dateCreaAgent;
	}
	


}
 ?>
