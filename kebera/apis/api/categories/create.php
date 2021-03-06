<?php 
header("Content-Type: application/json");
header("Accept: POST"); 
include_once "../../models/CategoryModal.php";
include_once "../../helpers.php";

$helper = new Helper();
$category = new Category();

$data = json_decode(file_get_contents('php://input'),true);

$category->name = $data["name"];
// $category->user_id = $helper->logged_in_user_id($_SESSION['TOKEN']);
if($category->create()){
    $res['status']=1;
    $res['message']='Category was created successfully...';
}else{
    $res['status']=0;
    $res['message']='Creating Category failed...';
}