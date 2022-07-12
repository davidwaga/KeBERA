<?php
header("Content-Type: application/json");
header("Accept: POST");

include_once "../../models/OrderItemModal.php";
include_once "../../helpers.php";
$order = new OrderItem();
$help = new Helper();

$data = json_decode(file_get_contents('php://input'), true);

$order->quantity = $data["quantity"];
$order->colour_variation_id = $data["colour_variation_id"];
$order->order_id = $data["order_id"];
$id = $_GET['id'];
// $order->user_id = $helper->logged_user_id($_SESSION['TOKEN']);
if($order->edit($id)){
    $res['status']=1;
    $res['message']='Order item was created successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to create order item...';
}

echo json_encode($res);
