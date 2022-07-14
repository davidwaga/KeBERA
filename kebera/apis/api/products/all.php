<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/ProductModal.php";
include_once "../../helpers.php";

$help = new Helper();
$product = new Product();
$prdt = [];
foreach($product->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($prdt, $row);
}

echo json_encode(["product"=>$prdt,"number_of_products"=>$product->index()->rowCount()]);