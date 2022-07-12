<?php 
$p  = explode('/', $_SERVER['REQUEST_URI']);
$url = $_SERVER['REQUEST_URI'];

switch($url){
    case "/":
        include_once "view-normal/index.php";
        break;
    case "/category":
        include_once "view-normal/index.php";
        break;
    case "/inputs":
        include_once "view-normal/inputs/index.php";
        break;
    case "/input-dealers":
        include_once "view-normal/input-dealers/index.php";
        break;
    case "/login":
        include_once "login.php";
        break;
    case "/logout":
        include_once "logout.php";
        break;
    case "/pgs":
        include_once "view-normal/pgs/index.php";
        break;
    case "/products":
        include_once "view-normal/products/index.php";
        break;
    case "/products/".$p[2]:
        include_once "view-normal/products/details.php";
        break;
    case "/products/".$p[2]."/renew":
        include_once "view-normal/products/details.php";
        break;

    case "/farmers":
        include_once "view-normal/farmer/index.php";
        break;
    case "/farmer-groups":
        include_once "view-normal/farmer-group/index.php";
        break;
    case "/farmer-groups/".$p[2]:
        include_once "view-normal/farmer-group/details.php=45";
        break;
    case "/extension-workers":
        include_once "view-normal/extension-worker/index.php";
        break; 
    case "/my-profile":
        include_once "view-normal/my-profile/index.php";
        break;    
    case "/remember-password":
        include_once "remember.php";
        break;
    case "/register":
        include_once "signup.php";
        break;
    case "/register/confirm-email":
        include_once "confirm.php";
        break;
    case "/dashboard":
        include_once "view-normal/index.php";
        break;
   
    default:
        if(strpos($url,'api')){
            header("Content-Type: application/json");
            include_once "apis/api-routes.php";
        }else{
            include_once "404.php";
        }        
        break;
}
