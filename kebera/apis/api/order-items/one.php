<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/OrderItemModal.php";
include_once "../../helpers.php";
$order = new OrderItem();
$help = new Helper();

$id = $_GET['id'];
$st = $order->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode(["order"=>$st[0]]);