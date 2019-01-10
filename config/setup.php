<?php
    include 'connection.php';
    class Setup extends Connect {
        function createDatabase() {
            try {
                $this->conn = new PDO($this->host, $this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = $this->conn->prepare('CREATE DATABASE IF NOT EXISTS `matcha`');
                $query->execute();
                echo 'created...';
            } catch (PDOException $e) {
                echo 'Error: '.$e->getMessage();
            }
        }
    }
    $create = new Setup();
    $create->createDatabase();
?>
