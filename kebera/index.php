<?php 

$t = $_SERVER['REQUEST_URI'];

switch($t){
    case '/product':
        include_once 'view-normal/products/index.php';
        break;
    default:
        header('location: index.php');
        break;

}