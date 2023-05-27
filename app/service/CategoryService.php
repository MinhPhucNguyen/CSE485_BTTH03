<?php 
    require_once "../app/config/DBConnect.php";
    require_once "../app/models/Category.php";
    class CategoryService{
        public static function getAllCategory(){
            $DBConnect = new DBConnect();
            $conn = $DBConnect->getConnection();

            $sql = "SELECT * FROM category";
            $stmt = $conn->query($sql);

            $categories = [];
            while($category = $stmt->fetch()){
                $category = new Category(
                    $category['id'], 
                    $category['name']
                );
                array_push($categories, $category);
            }
            return $categories;
        }
    }
?>