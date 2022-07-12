<?php 
include_once "../../helpers.php";
include_once "../models/PGSModal.php";

$helper = new Helper();
$pgs = new PSG();

$rs = [];

foreach($pgs->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($rs, $row);
}

echo json_encode(["pgs"=>$rs, "number_of_pgs"=>$pgs->index()->rowCount()]);
