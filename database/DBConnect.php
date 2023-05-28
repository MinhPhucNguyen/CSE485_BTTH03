<?php 
    class DBConnect{
        private $host;
        private $username;
        private $password;
        private $dbname;

        private $conn;

        public function __construct(){
            $this->host = DB_HOST;
            $this->username= DB_USERNAME;  
            $this->password = DB_PASSWORD;  
            $this->dbname = DB_NAME;  

            try{
                $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            }
            catch(PDOException $e){
                $this->host = null;
            }
        }

        public  function getConnection(){
            return  $this->conn;
        }
    }
