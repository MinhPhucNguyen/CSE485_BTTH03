<?php
require_once "../app/service/ArticleService.php";
require_once "../app/service/CategoryService.php";

class ArticleController
{

    public function index()
    {
        $articles = ArticleService::getAllArticles();
        include("../app/views/article/index.php");
    }

    public function create()
    {   
        $categories = CategoryService::getAllCategory();
        include "../app/views/article/create.php";
    }
}