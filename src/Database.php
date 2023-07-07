<?php 

class Database {
    public $servername;
    public $db_name;
    public $username;
    public $password;

    public function __construct($servername, $db_name, $username, $password)
    {
        $this->servername = $servername;
        $this->db_name = $db_name;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    public function connect()
    {
        try {
        $conn = new PDO("mysql:host=$this->servername; dbname=$this->db_name", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        }catch(PDOException $e){
            echo "Ulanishda xatolik: " . $e->getMessage(); 
        }
    }
}