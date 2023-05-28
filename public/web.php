<?php
require_once '../app/config/config.php';
$route = isset($_GET['route']) ? $_GET['route'] : '/';
switch ($route) {
    case '/':
        require_once APP_ROOT."/app/controllers/HomeController.php";
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'article':
        require_once APP_ROOT."/app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        $articleController->index();
        break;
    case 'create':
        require_once APP_ROOT."/app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        $articleController->create();
        break;
    case 'edit';
        require_once APP_ROOT."/app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        $articleController->edit();
    case 'select';
        require_once APP_ROOT."/app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        $articleController->select();
    case 'delete';
        require_once APP_ROOT."/app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        $articleController->delete();
    default:
        echo "Not Found";
        break;
}
