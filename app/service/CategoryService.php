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
