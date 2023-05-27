<?php
$route = isset($_GET['route']) ? $_GET['route'] : '/';
switch ($route) {
    case '/':
        require_once "../app/controllers/HomeController.php";
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'article':
        require_once "../app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        $articleController->index();
        break;
    case 'create':
        require_once "../app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        $articleController->create();
        break;
    default:
        echo "Not Found";
        break;
}
