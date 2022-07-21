<?php 
header('Content-Type:application/json');
include_once "../../models/InputModal.php";
include_once "../../helpers.php";

$input = new Input();

$id = $_GET['id'];
$t = $input->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode($t);