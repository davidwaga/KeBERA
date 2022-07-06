<?php 
header("Content-Type: application/json");
header("Accept: GET"); 
include_once "../../models/UserModal.php";
include_once "../../helpers.php";

$helper = new Helper();

//currently logged user id 
$user = $helper->logged_in_user_id($_SESSION['TOKEN']);

echo $user;