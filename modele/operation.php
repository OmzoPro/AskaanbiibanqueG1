<?php 
class Operation{
	private $idOperation;
	private $idCompte;
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
	function __construct($idOperation,$idCompte,$typeOperation,$montantOperation,$soldeAvant,$soldeApres,$compteDestinataire,$dateOperation,$idAgent){
		$this->idOperation = $idOperation;
		$this->idCompte = $idCompte;
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