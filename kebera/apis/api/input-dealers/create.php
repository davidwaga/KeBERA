<?php 
include_once "../../helpers.php";
include_once "../../models/InputDealerModal.php";

$dealer = new InputDealer();
$helper = new Helper();
$data = json_decode(file_get_contents('php://input'),true);

$dealer->user_id = $data['user']; 
$dealer->location = $data['location'];

if($dealer->create()){
    $t['status']=1;
    $t['message']='Dealer added successfully';
}else{
    $t['status']=0;
    $t['message']='Dealer not added';
}

echo json_encode($t);