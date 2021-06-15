<?php 
class User{
	private $role;
	private $login;
	private $password;

    /***
     *contructeur avec les parametres des variables declares 
     */
	function __construct($login,$password,$role){

		$this->login = $login;
		$this->password = $password;
		$this->role = $role;	
	}

	/***
     *getters
     */
	public function getRole(){
		return $this->role;
	}

	
	public function getLogin(){
		return $this->login;
	}

	public function getPassword(){
		return $this->password;
	}

	/***
     *setters
     */
	

	public function setRole($role){
		$this->role = $role;
	}

	public function setLogin($login){
		$this->login = $login;
	}

	public function setPassword($password){
		$this->password = $password;
	}

}
 ?>
