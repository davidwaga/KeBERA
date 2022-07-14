<?php 
header('Content-Type: application/json');
include_once "../../helpers.php";
include_once "../../models/InputDealerModal.php";

$dealer = new InputDealer();
$helper = new Helper();
$data = json_decode(file_get_contents('php://input'),true);

$id = $_GET['id'];
$dealer->user_id = $data['user']; 
$dealer->location = $data['location'];

if($dealer->edit($id)){
    $t['status']=1;
    $t['message']='Dealer updated successfully';
}else{
    $t['status']=0;
    $t['message']='Dealer not updated';
}

echo json_encode($t);