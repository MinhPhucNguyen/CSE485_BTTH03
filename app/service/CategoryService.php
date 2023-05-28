<<<<<<< HEAD
<?php 
    require_once APP_ROOT."/app/config/DBConnect.php";
    require_once APP_ROOT."/app/models/Category.php";
    class CategoryService{
        public static function getAllCategory(){
            $DBConnect = new DBConnect();
            $conn = $DBConnect->getConnection();
=======
<?php
require_once APP_ROOT . "/database/DBConnect.php";
require_once APP_ROOT . "/app/models/Category.php";
class CategoryService
{
    public static function getAllCategory()
    {
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();
        $sql = "SELECT * FROM category";
        $stmt = $conn->query($sql);
>>>>>>> 9cb5573b51d55b95b939dd27cc97cd27a930ab6f

        $categories = [];
        while ($category = $stmt->fetch()) {
            $category = new Category(
                $category['id'],
                $category['name']
            );
            array_push($categories, $category);
        }
        return $categories;
    }
}
