<?php 
class Agent{
<<<<<<< HEAD
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
	
	
=======
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
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1

    /***
     *contructeur avec les parametres des variables declares 
     */
<<<<<<< HEAD
	function __construct($idAgence,$nomAgent,$prenomAgent,$emailAgent,$adresseAgent,$sexe,$grade,$telephoneAgent,$naissanceAgent,$dateCreaAgent){

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
		

		

=======
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
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	}

	/***
     *getters
     */
<<<<<<< HEAD
=======
	public function getIdAgent(){
		return $this->idAgent;
	}
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	public function getIdAgence(){
		return $this->idAgence;
	}
	public function getNom(){
<<<<<<< HEAD
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
=======
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
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1

	public function setIdAgence($idAgence){
		$this->idAgence = $idAgence;
	}
<<<<<<< HEAD
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
=======

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
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
