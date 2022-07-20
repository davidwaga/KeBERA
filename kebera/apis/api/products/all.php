<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "../../models/ProductModal.php";
include_once "../../helpers.php";

$help = new Helper();
$product = new Product();
$prdt = [];
foreach($product->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($prdt, $row);
}

echo json_encode(["product"=>$prdt,"number_of_products"=>$product->index()->rowCount()]);