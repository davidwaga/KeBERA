<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/ProductModal.php";
include_once "../../helpers.php";
$product = new Product();
$help = new Helper();

$id = $_GET['product_id'];
$prdt = $product->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode(["product"=>$prdt[0]]);