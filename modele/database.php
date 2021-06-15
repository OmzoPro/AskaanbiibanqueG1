<?php 
class Database{
 private $host = "localhost";
 private $dbname = "abbank";
 private $user = "root";
 private $password = "root";
   

    public function connect(){
       
         $bdd = 'mysql:host='. $this->host. ';dbname='. $this->dbname;
         $con = new PDO($bdd, $this->user, $this->password);
         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         return $con; 
   }
}


?>