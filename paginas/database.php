<?php
class Database{
private $host;

private $db;

private $password;

private $user;

private $charset;

 

    public function _construct(){
        $this->host='localhost';
        $this->db='nutrimike';
        $this->user='root';
        $this->password='';
        $this->chaset='utf8mb4';
    }

    function connect(){
        try{
            $connection = "mysqli:host=" .$this->host. ";dbname=" . $this->db .";charset=" . $this->charset;
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false];

        $pdo = new PDO($connection,$this->user,$this->password,$options);

        }catch(PDOException  $e){
            print_r("error conection: " .$e->getMessage());
        }
    }
}
