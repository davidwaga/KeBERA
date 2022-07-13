<?php
header("Content-Type: application/json");
header("Accept: GET"); 
include_once "../../helpers.php";
include_once "../models/PGSMemberModal.php";

$member = new PGSMember();
$id = $_GET['id'];
$r = $member->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode($r);