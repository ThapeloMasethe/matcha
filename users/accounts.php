<?php
    session_start();
    include_once '../config/connection.php';

    class Accounts extends Connect {
        public $row;

        function login() {
            $email    = $_POST['username'];
            $password = $_POST['password'];
            try {
                $query = $this->conn->prepare("SELECT * FROM MATCHA.USERS
                WHERE `EMAIL` = '$email' AND `PASSWORD` = '$password'");
                $query->execute();
                header('Location: profile.php');
            } catch (PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
            $row = $query->fetch(PDO::FETCH_ASSOC);
        }
        function register() {
           $email    = $_POST['email'];
           $username = $_POST['username'];
           $password = password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost' => 5));
           try{
               $query = $this->conn->prepare('INSERT INTO MATCHA.USERS(EMAIL, USERNAME, `PASSWORD`) 
               VALUES("'. $email .'","'. $username .'","'. $password .'")');
               $query->execute();
           } catch(PDOException $e){
               echo 'Error: ' . $e->getMessage();
           }
        }
    }
    if (isset($_POST['login'])) {
        $loginObj = new Accounts($host, $user, $password);
        $loginObj->login();
    } else if (isset($_POST['register'])){
        $registerObj = new Accounts($host, $user, $password);
        $registerObj->register();
    } else if (isset($_POST['createProfile'])) {
        header('Location: ../match.php');
    }
?>