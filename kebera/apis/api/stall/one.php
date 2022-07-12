<?php
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/StallModal.php";
include_once "../../helpers.php";
$stall = new Stall();
$help = new Helper();

$id = $_GET['id'];
$st = $stall->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode(["stall"=>$st[0]]);