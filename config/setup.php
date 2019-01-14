<?php
    include 'connection.php';

    class Setup extends Connect {
        function createDatabase() {
            try {
                $query = $this->conn->prepare('CREATE DATABASE IF NOT EXISTS `matcha`');
                $query->execute();
                echo "Database For Matcha Created! <br>";
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }

        function createTables() {
            try {
                $query = $this->conn->prepare('CREATE TABLE IF NOT EXISTS MATCHA.USERS (
                    ID          INT NOT NULL AUTO_INCREMENT,
                    LASTNAME    VARCHAR(20),
                    FIRSTNAME   VARCHAR(20),
                    EMAIL       VARCHAR(100)    NOT NULL,
                    USERNAME    VARCHAR(20)     NOT NULL,
                    `PASSWORD`  VARCHAR(512)    NOT NULL,
                    PRIMARY KEY (ID)
                )');
                $query->execute();
                echo 'Table For Users Created!<br>';
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
    $create = new Setup($host, $user, $password);
    $create->createDatabase();
    $create->createTables();
?>
