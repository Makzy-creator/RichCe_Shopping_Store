<?php
class ConnectDb {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $tablename;
    private $conn;
     function __construct(
        $dbname = "richce_cart_system",
        $tablename = "cart",
        $servername = "localhost",
        $username = "root",
        $password = ""
    ) {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        $conn->exec($sql);

        $this->conn = $conn;
    }

    public function getConnection(){
        return $this->conn;
    }

}

