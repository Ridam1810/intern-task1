<?php       
// class db{
    // private $host = "localhost";
    // private $username = "root";
    // private $password = "";
    // private $database = "intern";
     $server = "localhost";
     $username = "root";
     $password = "";
     $database = "intern";
    // public $db;

    // public function __construct(){
        try{
            //creating DB connection
            // $this->db = new PDO("mysql:hsot=".$this->host.";dbname=".$this->database,
            // $this->username,$this->password);
            $pdo = new PDO("mysql:host=$server;dbname=$database", $username, $password); 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo $database;
            
        }catch(PDOException $e){
            echo "Connection problem : ".$e->getMessage();
        }
    
// }

?>