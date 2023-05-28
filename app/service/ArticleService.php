<?php
require_once APP_ROOT . "/database/DBConnect.php";
require_once APP_ROOT . "/app/models/Article.php";
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

    public static function createArticle(Article $article)
    {
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "INSERT INTO article(title, summary, content, category_id, member_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $article->getTitle(), PDO::PARAM_STR);
        $stmt->bindValue(2, $article->getSummary(), PDO::PARAM_STR);
        $stmt->bindValue(3, $article->getContent(), PDO::PARAM_STR);
        $stmt->bindValue(4, $article->getCategory_id(), PDO::PARAM_INT);
        $stmt->bindValue(5, $article->getMember_id(), PDO::PARAM_INT);
        $stmt->execute();

    }

    public static function deleteArticle($articleID){
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "DELETE FROM article WHERE id = '$articleID'";
        $stmt = $conn->query($sql);
        $stmt->execute();
    }

    public static function getArticleByID($articleID){
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "SELECT *FROM article WHERE id = '$articleID'";
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

    public static function editArticle(Article $article){
        $DBConnect = new DBConnect();
        $conn = $DBConnect->getConnection();

        $sql = "UPDATE article SET title='{$article->getTitle()}', summary = '{$article->getSummary()}', content ='{$article->getContent()}', category_id = '{$article->getCategory_id()}', member_id = '{$article->getMember_id()}' WHERE id = '{$article->getID()}'";
        $stmt = $conn->query($sql);
        $stmt->execute();
    }
}
