<?php 
    class Author{
        private $id;
        private $forename;

        private $surname;

        private $email;
        private $password;

        public function __construct($id, $forename, $surname, $email, $password){
            $this->id = $id;
            $this->forename = $forename;
            $this->surname = $surname;
            $this->email = $email;
            $this->password = $password;
        }

        public function getId(){
            return $this->id;
        }

        public function getForename(){
            return $this->forename;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setForename($forename){
            $this->forename = $forename;
        }

        public function setSurname($surname){
            $this->surname = $surname;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }
    }
?>