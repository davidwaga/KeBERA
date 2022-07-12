<?php 
header("Content-Type: application/json");
header("Accept: DELETE");

include_once "../../models/OrderItemModal.php";
include_once "../../helpers.php";
$order = new OrderItem();
$help = new Helper();

$id = $_GET['id'];

if($order->remove($id)){
    $res['status']=1;
    $res['message']='Order item was deleted successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to delete order item...';
}

echo json_encode($res);
