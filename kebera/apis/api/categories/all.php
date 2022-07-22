<?php 
header("Content-Type: application/json");
header("Accept: GET"); 
include_once "../../models/CategoryModal.php";
include_once "../../helpers.php";

$helper = new Helper();
$category = new Category();
//currently logged user id 
// $user = $helper->logged_in_user_id($_SESSION['TOKEN']);

// echo $user;
$rs = Array();

foreach($category->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($rs, Array(
        "category_id"=>$row['category_id'],
        "name"=>$row['name'],
        "created_at"=>$row['created_at'],
        ));
}

echo json_encode(["categories"=>$rs]);
