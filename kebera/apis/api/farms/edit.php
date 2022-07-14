<?php
header("Accept: POST");
header("Content-Type: application/json");
// include_once "../../helpers.php";
include_once "../../models/FarmModal.php";

$farm = new Farm();
// $helper = new Helper();
$data = json_decode(file_get_contents('php://input'), true);
$id = $_GET['id'];
$farm->name = $data['name'];
$farm->farm_location=$data['farm_location'];
$farm->longitude=$data['longitude'];
$farm->latiude=$data['latitude'];
// $farm->user_id = $helper->logged_in_user_id($_SESSION['TOKEN']);

if($farm->edit($id)){
    $f['status']=1;
    $f['message']='Farm update successfully';
}else{
    $f['status']=0;
    $f['message']='Farm was not update';
}

echo json_encode($f);

