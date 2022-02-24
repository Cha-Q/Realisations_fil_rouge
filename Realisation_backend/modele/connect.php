<?php

    Class Bdd{
        private $host = 'localhost';
        private $dbname = 'projet_verse';
        private $userName = 'root';
        private $password = '';


        public $connect;
        public function getConnexion() {
            $this->connect = null;

            try{
                $this->connect = new PDO(
                    "mysql:host=".$this->host.";
                    dbname=".$this->dbname."",
                    $this->userName,
                    $this->password
                );
            } catch (PDOException $e) {
                echo "Database could not be connected:".
                $e->getMessage();
            }
            $this->connect->exec('set names utf8');
            return $this->connect;
        }
            

        
    }


?>