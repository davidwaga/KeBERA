<?php
header("Content-Type: application/json");
include_once "../../helpers.php";
include_once "../../models/FarmModal.php";

$farm = new Farm();

$farms = [];

foreach($farm->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($farms, $row);
}

echo json_encode(["farms"=>$farms]);