<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/StallModal.php";
include_once "../../helpers.php";
$stall = new Stall();
$help = new Helper();

$st = [];
foreach($stall->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($st, $row);
}

echo json_encode(["stall"=>$st,"number_of_stall"=>$stall->index()->rowCount()]);