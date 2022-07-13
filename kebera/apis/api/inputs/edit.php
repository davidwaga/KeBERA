<?php
header('Content-Type: application/json');
header('Accept: PUT');
include_once "../../models/InputModal.php";
include_once "../../helpers.php";

$helper = new Helper();
$input = new Input();
$data = json_decode(file_get_contents('php://input'), true);

$id = $_GET['id'];
$input->name=$data['name'];
$input->test_results=$data['test_results'];
$input->price=$data['price'];
$input->inputs_dealer=$data['inputs_dealer'];

// $r = ['A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','W','X','Y'];
// $data = json_decode(file_get_contents('php://input'), true);

if($input->edit($id)){
    $y['status']=1;
    $y['message']='Input updated successfully';
}else{
    $y['status']=0;
    $y['message']='Input not updated';
}

echo json_encode($y);