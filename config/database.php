<?php
   /*  $dsn      = 'mysql:host=localhost;dbname=matcha';
    $user     = 'root';
    $password = 'prayeroracion'; */
    class Database {
        /* protected $conn; */
        protected $host;
        protected $user;
        protected $dbname;
        protected $password;
        function __construct() {
            $this->host     = 'mysql:host=localhost';
            $this->user     = 'root';
            $this->dbname   = 'dbname=matcha';
           /*  $this->dsn      = 'mysql:host=localhost;dbname=matcha'; */
            $this->password = 'prayeroracion';
        }
    }
?>