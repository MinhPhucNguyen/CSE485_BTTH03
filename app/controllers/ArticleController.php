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

    public function select(){
        $articleID = $_POST['edit-btn'];
        $categories = CategoryService::getAllCategory();
        $authors = AuthorService::getAllAuthor();
        $articles = ArticleService::getArticleByID($articleID);
        include APP_ROOT."/app/views/article/edit.php";
    }


    public function edit(){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $content = $_POST['content'];
        $categoryID = $_POST['category'];
        $authorID = $_POST['author'];
        $article = new Article($id,$title, $summary, $content, $categoryID, $authorID);
        ArticleService::editArticle($article);
        header("Location: ". DOMAIN);
        exit();

    }
    public function delete(){
        $articleID = $_POST['delete-btn'];
        $articles = ArticleService::deleteArticle($articleID);
        header("Location: ". DOMAIN);
        exit();
    }
    
}