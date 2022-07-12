<?php 
header("Content-Type: application/json");
header("Accept: DELETE");

include_once "../../models/MarketModal.php";
include_once "../../helpers.php";
$market = new Market();
$help = new Helper();

$id = $_GET['id'];

if($market->remove($id)){
    $res['status']=1;
    $res['message']='Market was deleted successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to delete market...';
}

echo json_encode($res);
