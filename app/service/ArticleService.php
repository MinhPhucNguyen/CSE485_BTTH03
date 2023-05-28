<?php
require_once APP_ROOT."/app/models/Article.php";
require_once  APP_ROOT."/app/config/DBConnect.php";
class ArticleService
{
    public static function getAllArticles()
    {

        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "SELECT * FROM article ORDER BY created DESC";
        $stmt = $conn->query($sql);

        $articles = [];
        while ($row = $stmt->fetch()) {
            $article = new Article(
                $row['id'],
                $row['title'],
                $row['summary'],
                $row['content'],
                self::getCategoryNameByID($row['category_id']), //self:: -> gọi chính class hiện tại đang đứng
                self::getAuthorNameByID($row['member_id']),
            );
            array_push($articles, $article);
        }

        return $articles;
    }

    public static function getCategoryNameByID($categoryID)
    {
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "SELECT id, name FROM category WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $categoryID, PDO::PARAM_INT);
        $stmt->execute();
        $category = $stmt->fetch();

        return $category['name'];
    }

    public static function getAuthorNameByID($authorID)
    {
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "SELECT id, forename FROM member WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $authorID, PDO::PARAM_INT);
        $stmt->execute();
        $author = $stmt->fetch();

        return $author['forename'];
    }

    public static function deletetArticle($articleID){
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "DELETE *FROM article WHERE id = '$articleID'";
        $stmt = $conn->query($sql);
        $stmt->execute();
    }
}
