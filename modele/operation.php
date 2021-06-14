<?php 
class Operation{
	private $numCompte;
	private $typeOperation;
	private $montantOperation;
	private $soldeAvant;
	private $soldeApres;
	private $compteDestinataire;
	private $dateOperation;
	private $idAgent;

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($numCompte,$typeOperation,$montantOperation,$soldeAvant,$soldeApres,$compteDestinataire,$dateOperation,$idAgent){
		$this->numCompte = $numCompte;
		$this->typeOperation = $typeOperation;
		$this->montantOperation = $montantOperation;
		$this->soldeAvant = $soldeAvant;
		$this->soldeApres = $soldeApres;
		$this->compteDestinataire = $compteDestinataire;
		$this->dateOperation = $dateOperation;
		$this->idAgent = $idAgent;
	}

	/***
     *getters
     */
	

	public function getNumCompte(){
		return $this->numCompte;
	}

	public function getTypeOperation(){
		return $this->typeOperation;
	}

	public function getMontantOperation(){
		return $this->montantOperation;
	}

	public function getSoldeAvant(){
		return $this->soldeAvant;
	}

	public function getSoldeApres(){
		return $this->soldeApres;
	}

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
	

	public function setNumCompte($numCompte){
		$this->numCompte = $numCompte;
	}

	public function setTypeOperation($typeOperation){
		$this->typeOperation = $typeOperation;
	}
	public function setMontantOperation($montantOperation){
		$this->montantOperation = $montantOperation;
	}

	public function setSoldeAvant($soldeAvant){
		$this->soldeAvant = $soldeAvant;
	}

	public function setSoldeApres($soldeApres){
		$this->soldeApres = $soldeApres;
	}

	public function setCompteDestinataire($compteDestinataire){
		$this->compteDestinataire = $compteDestinataire;
	}

	public function setDateOperation($dateOperation){
		$this->dateOperation = $dateOperation;
	}

	public function setIdAgent($idAgent){
		$this->idAgent = $idAgent;
	}


}
?>