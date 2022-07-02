<?php 
include_once "../../models/UserModal.php";
//include_once "../../../config/db.php";
$user = new User('Simon');
//$db = new Database();

$users = $user->index();
$res = [];

foreach($users->fetchAll(PDO::FETCH_ASSOC) as $row){
	array_push($res, $row);
}

echo json_encode($res);