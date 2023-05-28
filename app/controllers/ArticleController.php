<?php
require_once APP_ROOT."/app/views/article/index.php";
require_once APP_ROOT."/app/service/ArticleService.php";
require_once APP_ROOT."/app/service/CategoryService.php";

class ArticleController
{

    public function index()
    {
        $articles = ArticleService::getAllArticles();
        include(APP_ROOT."/app/views/article/index.php");
    }

    public function create()
    {   
        $categories = CategoryService::getAllCategory();
        include APP_ROOT."/app/views/article/create.php";
    }

    public function edit(){
        $articles = ArticleService::getAllArticles();
        include APP_ROOT."/app/views/article/edit.php";
    }

    public function delete(){
        if(isset($_POST['delete-btn'])){
            $articleID = $_POST['delete-btn'];
            $articles = ArticleService::deletetArticle($articleID);
            include(APP_ROOT."/app/views/article/index.php");
        }
    }
    
}