<?php 
class Db{    
  private $dbhost = "localhost";
  private $dbuser = "root";
  private $dbpass = "";
  private $dbname = "modernadb";
  public $pdo;
    public function __construct(){
        if(!isset($pdo)){
            try{
                $conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpass);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $conn->exec("SET CHARACTER SET utf8");
                $this->pdo = $conn;
            }catch(Exception $e){
                die("Failed to connect with database". $e->getMessage());
            }
        }
    }
}