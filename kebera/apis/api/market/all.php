<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/MarketModal.php";
include_once "../../helpers.php";
$market = new Market();
$help = new Helper();

$st = [];
foreach($market->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($st, $row);
}

echo json_encode(["markets"=>$st,"number_of_market"=>$market->index()->rowCount()]);