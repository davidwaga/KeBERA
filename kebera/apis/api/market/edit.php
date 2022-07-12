<?php
header("Content-Type: application/json");
header("Accept: PUT");

include_once "../../models/MarketModal.php";
include_once "../../helpers.php";
$market = new Market();
$help = new Helper();

$data = json_decode(file_get_contents('php://input'), true);

$market->name = $data['name'];
$market->latitude = $data['latitude'];
$market->longitude = $data['longitude'];
$market->user_id = $help->logged_in_user_id($_SESSION['TOKEN']);

if($market->create()){
    $res['status']=1;
    $res['message']='Market was updated successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to update market...';
}

echo json_encode($res);
