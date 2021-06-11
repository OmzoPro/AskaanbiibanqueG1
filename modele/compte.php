<?php 
class Compte{
<<<<<<< HEAD
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
		
=======
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
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	}

	/***
     *getters
     */
<<<<<<< HEAD
	
=======
	public function getIdCompte(){
		return $this->idCompte;
	}

	public function getIdClient(){
		return $this->idClient;
	}

>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
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
<<<<<<< HEAD
=======
	public function setIdCompte($idCompte){
		$this->idCompte = $idCompte;
	}

	public function setIdClient($idClient){
		$this->idClient = $idClient;
	}

>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
	public function setNumCompte($numCompte){
		$this->numCompte = $numCompte;
	}

	public function setTypeCompte($typeCompte){
		$this->typeCompte = $typeCompte;
	}

	public function setSolde($solde){
		$this->solde = $solde;
	}
<<<<<<< HEAD

=======
>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
}
?>