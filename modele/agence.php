<?php 
class Agence{
	public $idAgence;
	public $nomAgence;
	public $adresse;
	public $telephone;
	public $email;
	public $dateCreation;
	

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($idAgence,$nomAgence,$email,$adresse,$telephone,$dateCreation){
		
		$this->idAgence = $idAgence;
		$this->nomAgence = $nomAgence;
		$this->email = $email;
		$this->adresse = $adresse;
		$this->telephone = $telephone;
		$this->dateCreation = $dateCreation;
	}

	/***
     *getters
     */
	public function getIdAgence(){
		return $this->idAgence;
	}

	public function getNom(){
		return $this->nomAgence;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	

	public function getTelephone(){
		return $this->telephone;
	}
	

	public function getDateCreation(){
		return $this->dateCreation;
	}

	/***
     *setters
     */
	public function setIdAgence($idAgence){
		$this->idAgence = $idAgence;
	}

	public function setNom($nomAgence){
		$this->nomAgence = $nomAgence;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}
	
	
	public function setTelephone($telephone){
		$this->telephone = $telephone;
	}

	
	public function setDateCreation($dateCreation){
		$this->dateCreation = $dateCreation;
	}
	


}
 ?>
