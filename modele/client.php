<?php 
class Client{
	private $idClient;
	private $idAgent;
	private $idPersonne;
	private $matriculeClient;
	private $numCompte;
	private $solde;
	private $typeCompte;

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($idClient,$idAgent,$idPersonne,$matriculeClient,$numCompte,$solde,$typeCompte){
		$this->idClient = $idClient;
		$this->idAgent = $idAgent;
		$this->idPersonne = $idPersonne;
		$this->matriculeClient = $matriculeClient;
		$this->numCompte = $numCompte;
		$this->solde = $solde;
		$this->typeCompte = $typeCompte;
	}

	/***
     *getters
     */
	public function getIdClient(){
		return $this->idClient;
	}

	public function getIdAgent(){
		return $this->idAgent;
	}

	public function getIdPersonne(){
		return $this->idPersonne;
	}

	public function getMatriculeClient(){
		return $this->matriculeClient;
	}

	public function getNumCompte(){
		return $this->numCompte;
	}

	public function getSolde(){
		return $this->solde;
	}

	public function getTypeCompte(){
		return $this->typeCompte;
	}
	
	/***
     *setters
     */
	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

	public function setIdAgent($idAgent){
		$this->idAgent = $idAgent;
	}

	public function setIdPersonne($idPersonne){
		$this->idPersonne = $idPersonne;
	}

	public function setMatriculeClient($matriculeClient){
		$this->matriculeClient = $matriculeClient;
	}

	public function setNumCompte($numCompte){
		$this->numCompte = $numCompte;
	}

	public function setSolde($solde){
		$this->solde = $solde;
	}

	public function setTypeCompte($typeCompte){
		$this->typeCompte = $typeCompte;
	}

}
?>