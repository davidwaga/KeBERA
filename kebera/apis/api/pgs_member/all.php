<?php
header("Content-Type: application/json");
header("Accept: GET"); 
include_once "../../helpers.php";
include_once "../models/PGSMemberModal.php";

$member = new PGSMember();
$helper = new Helper();
$r = [];

foreach($member->index()->fetchAll() as $row){
    array_push($r, [
        "user"=>[
            'name'=>$helper->get_username($row["user_id"]),
            "user_id"=>$row["user_id"]
            ]
        ]);
}

echo json_encode($r);