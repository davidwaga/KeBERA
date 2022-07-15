<?php 
$p  = explode('/', $_SERVER['REQUEST_URI']);
if(count($p)<3){
    $p[2]=null;
}
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
    case "/input-dealers/".$p[2]:
        include_once "view-normal/input-dealers/details.php";
        break;
    case "/input-dealers/".$p[2]."/add-input":
        include_once "view-normal/input-dealers/add-input.php";
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
    case "/pgs/".$p[2]:
        include_once "view-normal/pgs/details.php";
        break;
    case "/pgs/".$p[2].'/add-member':
        include_once "view-normal/pgs/add-member.php";
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
    
    case "/farms":
        include_once "view-normal/farmer/index.php";
        break;
    case "/farms/add-new":
        include_once "view-normal/farmer/add-farmer.php";
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
    case "/my-profile/".$p[2].'/edit':
        include_once "view-normal/my-profile/edit-profile.php";
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
    case "/user/".$p[2]:
        include_once "view-normal/my-profile/user.php";
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
