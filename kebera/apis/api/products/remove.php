<?php 
header("Content-Type: application/json");
header("Accept: DELETE");

include_once "../../models/ProductModal.php";
include_once "../../helpers.php";
$product = new Product();
$help = new Helper();

$id = $_GET['id'];

if($product->remove($id)){
    $res['status']=1;
    $res['message']='Product was deleted successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to delete product...';
}

echo json_encode($res);
