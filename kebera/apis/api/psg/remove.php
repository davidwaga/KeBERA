<?php 
include_once "../../helpers.php";
include_once "../models/PGSModal.php";

$helper = new Helper();
$pgs = new PSG();

$id = $_GET['id'];

$psg->remove($id);
$msg["status"]=1;
$msg["message"]="PGS was deleted successfully";
echo json_encode($msg);
