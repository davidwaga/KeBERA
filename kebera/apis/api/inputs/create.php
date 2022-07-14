<?php
header('Content-Type: application/json');
header('Accept: POST');
include_once "../../models/InputModal.php";
include_once "../../helpers.php";

$helper = new Helper();
$input = new Input();
$data = json_decode(file_get_contents('php://input'), true);

$input->name=$data['name'];
$input->test_results=$data['test_results'];
$input->price=$data['price'];
$input->inputs_dealer=$data['inputs_dealer'];

$r = ['A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','W','X','Y'];
// $data = json_decode(file_get_contents('php://input'), true);
CODE:
$code = 'INP'.rand(1000,9999).$r[rand(0,21)].$r[rand(0,21)].$r[rand(0,21)];
$o = $helper->query("select * from inputs where code=:code",[':code'=>$code]);
if($o->rowCount()>0){
    goto CODE;
}
$input->code = $code;
if($input->create()){
    $y['status']=1;
    $y['message']='Input added successfully';
}else{
    $y['status']=0;
    $y['message']='Input not added';
}

echo json_encode($y);