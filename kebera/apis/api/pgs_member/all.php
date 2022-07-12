<?php
header("Content-Type: application/json");
header("Accept: GET"); 
include_once "../../helpers.php";
include_once "../models/PGSMemberModal.php";

$member = new PGSMember();

$r = [];

foreach($member->index()->fetchAll() as $row){
    array_push($r, $row);
}

echo json_encode($r);