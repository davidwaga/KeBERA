<?php 
header('Content-Type:application/json');
include_once "../../models/InputModal.php";
include_once "../../helpers.php";

$input = new Input();

$i = [];

foreach($input->index()->fetchAll(PDO::FETCH_ASSOC) as $ro){
    array_push($i, $ro);
}

echo json_encode($i);