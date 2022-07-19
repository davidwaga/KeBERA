<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/ProductModal.php";
include_once "../../helpers.php";
$product = new Product();
$help = new Helper();

$id = $_GET['id'];
$prdt = $product->one($id)->fetch(PDO::FETCH_ASSOC);

if($product->one($id)->rowCount()>0){
    $p['product']=$prdt;
    $p['user']=$help->get_user($prdt["user_id"]);
    $p['farm']=$help->get_farm($prdt['farm_id']);
    $p['category']=$help->get_category($prdt['category_id']);
    $p['size_variation']=$help->get_size_variation($prdt['size_variation_id']);
}else{
    $p['message']='No product found';
}

echo json_encode($p);