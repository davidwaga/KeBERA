<?php 
header("Content-Type: application/json");
header("Accept: PUT");

include_once "../../models/StallModal.php";
include_once "../../helpers.php";
$stall = new Stall();
$help = new Helper();
$r = ['A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','W','X','Y'];
$data = json_decode(file_get_contents('php://input'), true);
STALL:
$stall_number = 'ST'.rand(10000,99999).$r[rand(0,21)].$r[rand(0,21)].$r[rand(0,21)];
$check = $help->query("select * from stall where stall_number=:stall_number",[':stall_number'=>$stall_number]);
if($check->rowCount()>0){
    goto STALL;
}

$stall->market_id = $data["market_id"];
$stall->stall_number = $data['stall_number'];

if($stall->edit($stall->stall_number)){
    $res['status']=1;
    $res['message']='Stall was update successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to update stall...';
}

echo json_encode($res);
