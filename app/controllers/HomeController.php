<?php 
    require_once "../app/service/ArticleService.php";
    class HomeController{
        public function index(){

            $articles = ArticleService::getAllArticles();
            include("../app/views/home/index.php");
        }
    }
