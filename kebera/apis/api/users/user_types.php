<?php 
header("Content-Type: application/json");
header("Accept: GET");

include_once "../../models/UserModal.php";
include_once "../../helpers.php";
$user = new User();
$help = new Helper();

$user_type = $user->user_types()->fetchAll(PDO::FETCH_ASSOC);

$res['status'] = 1;
$res["user_type"] = $user_type;

echo json_encode($res);