<?php 
session_start();
header('Content-Type: application/json');
include_once "../../models/UserModal.php";

$user = new User();

$user->logout();
$r['status']=1;
$r['message']='Logged out successfully...';

echo json_encode($r);

