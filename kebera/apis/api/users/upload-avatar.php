<?php
// header("Content-Type: multipart/form-data");
header("Content-Type: application/json");
header('Accept: POST');
include_once "../../helpers.php";

$helper = new Helper();

$data = json_decode(file_get_contents('php://input'));
$helper->upload_file('avatars','avatar');
echo json_encode(["id"=>23,"data"=>$data]);