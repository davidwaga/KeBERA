<?php 
header("Content-Type: application/json");
header("Accept: PUT");
include_once "../../helpers.php";
include_once "../models/PGSMemberModal.php";

$member = new PGSMember();

$data = json_decode(file_get_contents('php://input'),true);

$member->user_id = $data['user_id'];
$member->pgs_id = $data["pgs_id"];

if($member->create()){
    $r['status']=1;
    $r['message']='PGS member added successfully';
}else{
    $r['status'] = 0;
    $r['message'] = 'Member was not added...';
}


echo json_encode($r);