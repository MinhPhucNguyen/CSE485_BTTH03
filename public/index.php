<?php
require_once "../app/config/config.php";

$route = isset($_GET['route']) ? $_GET['route'] : '/';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($route){
    case '/':
        require_once APP_ROOT . "/app/controllers/ArticleController.php";
        $articleController = new ArticleController();
        if($action == 'create'){
            $articleController->create();
        }
        else if($action == 'store'){
            $articleController->store();
        }
        else{
            $articleController->index();
        }
        break;
    default:
        echo "Not Found";
        break;
}
