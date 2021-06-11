<?php 
class Operation{
<<<<<<< HEAD
	private $typeOperation;
	private $montant;
	private $soldeAvant;
	private $soldeApres;
	private $dateOperation;
	private $idClient;
=======
	private $idOperation;
	private $idCompte;
	private $typeOperation;
	private $montantOperation;
	private $soldeAvant;
	private $soldeApres;
	private $compteDestinataire;
	private $dateOperation;
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	private $idAgent;

    /***
     *contructeur avec les parametres des variables declares 
     */
<<<<<<< HEAD
	function __construct($typeOperation,$montant,$soldeAvant,$soldeApres,$dateOperation,$idClient,$idAgent){
		$this->typeOperation = $typeOperation;
		$this->montant = $montant;
		$this->soldeAvant = $soldeAvant;
		$this->soldeApres = $soldeApres;
		$this->dateOperation = $dateOperation;
		$this->idClient = $idClient;
=======
	function __construct($idOperation,$idCompte,$typeOperation,$montantOperation,$soldeAvant,$soldeApres,$compteDestinataire,$dateOperation,$idAgent){
		$this->idOperation = $idOperation;
		$this->idCompte = $idCompte;
		$this->typeOperation = $typeOperation;
		$this->montantOperation = $montantOperation;
		$this->soldeAvant = $soldeAvant;
		$this->soldeApres = $soldeApres;
		$this->compteDestinataire = $compteDestinataire;
		$this->dateOperation = $dateOperation;
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
		$this->idAgent = $idAgent;
	}

	/***
     *getters
     */
<<<<<<< HEAD
	public function getTypeOperation(){
		return $this->typeOperation;
	}

	public function getMontant(){
		return $this->montant;
	}

	public function getDateOperation(){
		return $this->dateOperation;
	}

	public function getIdClient(){
		return $this->idClient;
	}

	public function getIdAgent(){
		return $this->idAgent;
=======
	public function getIdOperation(){
		return $this->idOperation;
	}

	public function getIdCompte(){
		return $this->idCompte;
	}

	public function getTypeOperation(){
		return $this->typeOperation;
	}

	public function getMontantOperation(){
		return $this->montantOperation;
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	}

	public function getSoldeAvant(){
		return $this->soldeAvant;
	}

	public function getSoldeApres(){
		return $this->soldeApres;
	}

<<<<<<< HEAD
	/***
     *setters
     */
	public function setTypeOperation($typeOperation){
		$this->typeOperation = $typeOperation;
	}

	public function setMontant($montant){
		$this->montant = $montant;
	}

	public function setDateOperation($dateOperation){
		$this->dateOperation = $dateOperation;
	}

	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

	public function setIdAgent($idAgent){
		$this->idAgent = $idAgent;
=======
	public function getCompteDestinataire(){
		return $this->compteDestinataire;
	}

	public function getDateOperation(){
		return $this->dateOperation;
	}

	public function getIdAgent(){
		return $this->idAgent;
	}

	/***
     *setters
     */
	public function setIdOperation($idOperation){
		$this->idOperation = $idOperation;
	}

	public function setIdCompte($idCompte){
		$this->idCompte = $idCompte;
	}

	public function setTypeOperation($typeOperation){
		$this->typeOperation = $typeOperation;
	}
	public function setMontantOperation($montantOperation){
		$this->montantOperation = $montantOperation;
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	}

	public function setSoldeAvant($soldeAvant){
		$this->soldeAvant = $soldeAvant;
	}

	public function setSoldeApres($soldeApres){
		$this->soldeApres = $soldeApres;
	}

<<<<<<< HEAD
=======
	public function setCompteDestinataire($compteDestinataire){
		$this->compteDestinataire = $compteDestinataire;
	}

	public function setDateOperation($dateOperation){
		$this->dateOperation = $dateOperation;
	}

	public function setIdAgent($idAgent){
		$this->idAgent = $idAgent;
	}

>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1

}
?>