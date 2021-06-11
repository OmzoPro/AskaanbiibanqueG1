<?php 
class Compte{
	public $numCompte;
	public $typeCompte;
	public $solde;
	
    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct( $numCompte, $typeCompte, $solde){
		
		$this->numCompte = $numCompte;
		$this->typeCompte = $typeCompte;
		$this->solde = $solde;
		
	}

	/***
     *getters
     */
	
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