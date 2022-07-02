<?php 
$p = $_SERVER;
// var_dump($p);
// echo "<br />";
$url = $p['REQUEST_URI'];
$p  = explode('/', $_SERVER['REQUEST_URI']);



switch($url){
    case "/":
        include_once "view-normal/index.php";
        break;
    case "/login":
        include_once "./login.php";
        break;
    case "/logout":
        include_once "./logout.php";
        break;
    case "/products":
        include_once "view-normal/products/index.php";
        break;
    case "/products/".$p[2]:
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
        
    case "/remember-password":
        include_once "remember.php";
        break;
    case "/register":
        include_once "register.php";
        break;
    

    //dash board routes
    case "/dashboard":
        include_once "view-normal/index.php";
        break;
    default:
        include_once "404.php";
        break;
}