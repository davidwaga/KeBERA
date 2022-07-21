<?php
header("Content-Type: application/json");
include_once "../../helpers.php";
include_once "../../models/FarmModal.php";

$farm = new Farm();
$id = $_GET['id'];

if($farm->remove($id)){
    $f["status"]=1;
    $f["message"]="Farm deleted successfully";
}else{
    $f["status"]=0;
    $f["message"]="Farm was not delete...";
}

echo json_encode($f);