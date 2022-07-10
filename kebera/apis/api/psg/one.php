<?php 
include_once "../../helpers.php";
include_once "../models/PGSModal.php";

$pgs = new PGS();
$helper = new Helper();

// $data = json_decode(file_get_contents('php://input'));
$id = $_GET['id'];
$pgs = $pgs->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode($pgs);



