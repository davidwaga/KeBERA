<?php 

header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/OrderModal.php";
include_once "../../helpers.php";
$order = new Order();
$help = new Helper();

$st = [];
foreach($order->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($st, $row);
}

echo json_encode(["orders"=>$st,"number_of_order"=>$order->index()->rowCount()]);