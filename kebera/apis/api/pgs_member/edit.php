<?php 
header("Content-Type: application/json");
header("Accept: PUT");
include_once "../../helpers.php";
include_once "../models/PGSMemberModal.php";

$member = new PGSMember();

$data = json_decode(file_get_contents('php://input'),true);

$member->user_id = $data['user_id'];
$member->pgs_id = $data["pgs_id"];
$id = $_GET['id'];
if($member->edit($id)){
    $r['status']=1;
    $r['message']='PGS member updated successfully';
}else{
    $r['status'] = 0;
    $r['message'] = 'Member was not updated...';
}


echo json_encode($r);