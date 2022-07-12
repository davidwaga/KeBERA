<?php 
header("Content-Type: application/json");
header("Accept: POST");

include_once "../../models/ProductModal.php";
include_once "../../helpers.php";
$product = new Product();
$help = new Helper();
$r = ['A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','W','X','Y'];
$data = json_decode(file_get_contents('php://input'), true);
PRODUCT:
$product_name = 'PR'.rand(10000,99999).$r[rand(0,21)].$r[rand(0,21)].$r[rand(0,21)];
$check = $help->query("select * from product where product_name=:product_name",[':prdouct_name'=>$product_name]);
if($check->rowCount()>0){
    goto PRODUCT;
}

$product->product_name = $data['product_name'];
$product->product_pic = $data['product_pic'];
$product->product_description = $data['product_description'];
$product->product_stock = $data['product_stock'];
$product->category_id = $data["category_id"];
$product->product_price = $data['product_price'];
$product->size_variation_id = $data['size_variation_id'];
$product->stall_id = $data['stall_id'];
$product->farm_id = $data['farm_id'];
$product->user_id = $help->logged_in_user_id($_SESSION['TOKEN']);


if($product->create()){
    $res['status']=1;
    $res['message']='Product was created successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to create product...';
}

echo json_encode($res);
