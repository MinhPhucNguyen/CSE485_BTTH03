<?php
require_once APP_ROOT . "/app/service/ArticleService.php";
require_once APP_ROOT . "/app/service/CategoryService.php";
require_once APP_ROOT . "/app/service/AuthorService.php";

class ArticleController
{
    public function index(){
        $articles = ArticleService::getAllArticles();
        include  APP_ROOT . "/app/views/home/index.php";
    }
    public function create()
    {   
        $categories = CategoryService::getAllCategory();
        $authors = AuthorService::getAllAuthor();
        include APP_ROOT . "/app/views/article/create.php";
    }
    public function store(){
            $title = $_POST['title'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];
            $categoryID = $_POST['category'];
            $authorID = $_POST['author'];
    
            $article = new Article(null,$title, $summary, $content, $categoryID, $authorID);
            ArticleService::createArticle($article);

            header("Location: ". DOMAIN);
            exit();
    }
}