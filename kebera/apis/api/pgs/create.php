<?php 
header("Content-Type: application/json");
header("Accept: POST");
include_once "../../helpers.php";
include_once "../../models/PGSModal.php";

$pgs = new PGS();
$helper = new Helper();

$data = json_decode(file_get_contents('php://input'), true);

$pgs->pgs_name = $data["pgs_name"];
$pgs->pgs_location = $data["pgs_location"];
$pgs->user_id = $helper->logged_in_user_id($_SESSION['TOKEN']);

if($pgs->create()){
    $msg["status"]=1;
    $msg["message"]="PGS was created successfully";
}else{
    $msg["status"]=0;
    $msg["message"]="Couldn't create PGS...";
}
echo json_encode($msg);