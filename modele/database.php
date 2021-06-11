<<<<<<< HEAD
<?php 
class Database{
 private $host = "localhost";
 private $dbname = "abbank";
 private $user = "root";
 private $password = "";
   

    public function connect(){
       
         $dsn = 'mysql:host='. $this->host. ';dbname='. $this->dbname;
         $con = new PDO($dsn, $this->user, $this->password);
         $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         return $con; 
}
}



=======
<?php 
class Database{
 private $host = "localhost";
 private $dbname = "abbank";
 private $user = "root";
 private $password = "root";
   

    public function connect(){
       
         $bdd = 'mysql:host='. $this->host. ';dbname='. $this->dbname;
         $con = new PDO($bdd, $this->user, $this->password);
         $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         return $con; 
}
}



>>>>>>> 30e7639df9d7e6ad6384ec089392eedc8134e7e1
 ?>