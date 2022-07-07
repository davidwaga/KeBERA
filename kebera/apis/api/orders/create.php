<?php
header("Content-Type: application/json");
header("Accept: POST");

include_once "../../models/OrderModal.php";
include_once "../../helpers.php";
$order = new Order();
$help = new Helper();

$data = json_decode(file_get_contents('php://input'), true);

$order->order_date = $data["order_date"];
$order->ordered = $data["ordered"];
$order->shipping_address = $data["shipping_address"];
$order->billing_address = $data["billing_address"];
$order->user_id = $helper->logged_user_id($_SESSION['TOKEN']);
if($order->create()){
    $res['status']=1;
    $res['message']='Order was created successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to create order...';
}

echo json_encode($res);
