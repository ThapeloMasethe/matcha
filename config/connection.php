<?php
    include 'database.php';
    class Connect extends Database {
        /* protected $conn;
        function __construct($dsn, $user, $password) {
            try {
                $this->conn = new PDO($dsn, $user, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Error: '.$e->getMessage();
            }
        } */
        protected $conn;
        function __construct() {
        try {
            $this->conn = new PDO($this->host.';'.$this->dbname, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error: '.$e->getMessage();
        }
       }
    }
?>