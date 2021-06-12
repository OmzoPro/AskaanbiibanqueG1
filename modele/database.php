<?php 
class Database{
 private $host = "localhost";
 private $dbname = "abbank";
 private $user = "root";
 private $password = "";
   

    public function connect(){
       
         $dsn = 'mysql:host='. $this->host. ';dbname='. $this->dbname;
         $con = new PDO($dsn, $this->user, $this->password);
         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         return $con; 
}
}



 ?>