<?php

class ConnectDatabase {
    private $user;
    private $host;
    private $password;
    public $conn;

    function __construct(){
        $this->user = "root";
        $this->host = "localhost";
        $this->password = "mypass";
        $this->conn = new mysqli($this->host, $this->user, $this->password);
        if($this->conn->connect_error) { die($this->conn->connect_error); }
        $this->conn->query("CREATE DATABASE IF NOT EXISTS emails;");
        $this->conn->query("CREATE TABLE IF NOT EXISTS emails.inbox(id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, isfrom VARCHAR(255), subject VARCHAR(255), message VARCHAR(255), time VARCHAR(255));");

    }

}

?>