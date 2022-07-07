<?php 
header("Content-Type: application/json");
header("Accept: DELETE");

include_once "../../models/StallModal.php";
include_once "../../helpers.php";
$stall = new Stall();
$help = new Helper();

$id = $_GET['id'];

if($stall->remove($id)){
    $res['status']=1;
    $res['message']='Stall was deleted successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to delete stall...';
}

echo json_encode($res);
