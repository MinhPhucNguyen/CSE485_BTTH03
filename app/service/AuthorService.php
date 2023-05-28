<?php 
require_once APP_ROOT. "/database/DBConnect.php";
require_once APP_ROOT. "/app/models/Author.php";
    class AuthorService{
        public static function getAllAuthor(){
            $DBConnect = new DBConnect();
            $conn = $DBConnect->getConnection();

            $sql = "SELECT * FROM member";
            $stmt = $conn->query($sql); 

            $authors = [];
            while($option = $stmt->fetch()){
                $author = new Author(
                    $option['id'],
                    $option['forename'],
                    $option['surname'],
                    $option['email'],
                    $option['password'],
                );
                array_push($authors, $author);
            }

            return $authors;
        }
    }
?>