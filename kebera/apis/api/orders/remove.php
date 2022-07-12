<?php 
header("Content-Type: application/json");
header("Accept: DELETE");

include_once "../../models/OrderModal.php";
include_once "../../helpers.php";
$order = new Order();
$help = new Helper();

$id = $_GET['id'];

if($order->remove($id)){
    $res['status']=1;
    $res['message']='Order was deleted successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to delete order...';
}

echo json_encode($res);
