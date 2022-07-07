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
$id = $_GET['id'];

// $res["number_of_category"] = $category->index()->rowCount();
$res["category"]=$category->one($id)->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);