<?php 
class Compte{
	private $idCompte;
	private $idClient;
	private $numCompte;
	private $typeCompte;
	private $solde;

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($idCompte,$idClient,$numCompte,$typeCompte,$solde){
		$this->idCompte = $idCompte;
		$this->idClient = $idClient;
		$this->numCompte = $numCompte;
		$this->typeCompte = $typeCompte;
		$this->solde = $solde;
	}

	/***
     *getters
     */
	public function getIdCompte(){
		return $this->idCompte;
	}

	public function getIdClient(){
		return $this->idClient;
	}

	public function getNumCompte(){
		return $this->numCompte;
	}

	public function getTypeCompte(){
		return $this->typeCompte;
	}

	public function getSolde(){
		return $this->solde;
	}
	
	/***
     *setters
     */
	public function setIdCompte($idCompte){
		$this->idCompte = $idCompte;
	}

	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

	public function setNumCompte($numCompte){
		$this->numCompte = $numCompte;
	}

	public function setTypeCompte($typeCompte){
		$this->typeCompte = $typeCompte;
	}

	public function setSolde($solde){
		$this->solde = $solde;
	}
}
?>