<?php 
header("Content-Type: application/json");
header("Accept: GET");
include_once "../../helpers.php";
include_once "../../models/SizeVariationModal.php";

$helper = new Helper();
$size_variation = new SizeVariation();

$rs = Array();

foreach($size_variation->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($rs, Array(
        "size_variation_id"=>$row['size_variation_id'],
        "name"=>$row['name'],
        'created_at'=>$row['created_at'], 
        'updated_at'=>$row['updated_at']));
}

echo json_encode(["size_variation"=>$rs]);
