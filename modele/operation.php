<?php 
class Operation{
	private $typeOperation;
	private $montant;
	private $soldeAvant;
	private $soldeApres;
	private $dateOperation;
	private $idClient;
	private $idAgent;

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($typeOperation,$montant,$soldeAvant,$soldeApres,$dateOperation,$idClient,$idAgent){
		$this->typeOperation = $typeOperation;
		$this->montant = $montant;
		$this->soldeAvant = $soldeAvant;
		$this->soldeApres = $soldeApres;
		$this->dateOperation = $dateOperation;
		$this->idClient = $idClient;
		$this->idAgent = $idAgent;
	}

	/***
     *getters
     */
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
	}

	public function getSoldeAvant(){
		return $this->soldeAvant;
	}

	public function getSoldeApres(){
		return $this->soldeApres;
	}

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
	}

	public function setSoldeAvant($soldeAvant){
		$this->soldeAvant = $soldeAvant;
	}

	public function setSoldeApres($soldeApres){
		$this->soldeApres = $soldeApres;
	}


}
?>