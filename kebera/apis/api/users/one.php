<?php
header("Content-Type: application/json");
header("Accept: GET"); 
include_once "../../models/UserModal.php";

$user = new User();
$id = $_GET['id'];
$users = $user->one($id);


$user = $users->fetch(PDO::FETCH_ASSOC);

echo json_encode($user);