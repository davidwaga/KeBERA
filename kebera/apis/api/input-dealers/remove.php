<?php 
header("Content-Type: application/json");
header("Accept: DELETE");
include_once "../../helpers.php";
include_once "../../models/InputDealModal.php";

$helper = new Helper();
$pgs = new InputDeal();

$id = $_GET['id'];

$psg->remove($id);
$msg["status"]=1;
$msg["message"]="Dealer removed was deleted successfully";
echo json_encode($msg);
