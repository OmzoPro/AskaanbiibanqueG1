<?php 
class Database{
 private $host = "localhost";
 private $dbname = "askanbank";
 private $user = "root";
 private $password = "root";
   

    public function connect(){
       
         $dsn = 'mysql:host='. $this->host. ';dbname='. $this->dbname;
         $con = new PDO($dsn, $this->user, $this->password);
         $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         return $con; 
}
}



 ?>