<?php 
    require_once APP_ROOT."/app/service/ArticleService.php";
    class HomeController{
        public function index(){

            $articles = ArticleService::getAllArticles();
            include(APP_ROOT."/app/views/home/index.php");
        }
    }
