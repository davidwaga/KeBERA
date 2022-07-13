<?php 
header("Content-Type: application/json");
header("Accept: GET");
include_once "../../helpers.php";
include_once "../../models/PGSModal.php";
include_once "../../models/PGSMemberModal.php";
$pgs1 = new PGS();
$helper = new Helper();
$member = new PGSMember();
// $data = json_decode(file_get_contents('php://input'));
$id = $_GET['id'];
$pgs = $pgs1->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode([
    "pgs"=>$pgs,
    "user"=>$helper->get_user($pgs['user_id']),
    "number_of_members"=>$pgs1->num_of_members($row["pgs_id"])->fetch()["members"], 
    "members"=>$pgs1->member($row['pgs_id'])->fetchAll()
]);



