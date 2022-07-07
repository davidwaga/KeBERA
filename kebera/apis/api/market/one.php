<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/MarketModal.php";
include_once "../../helpers.php";
$market = new Market();
$help = new Helper();

$id = $_GET['id'];
$st = $market->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode(["stall"=>$st[0]]);