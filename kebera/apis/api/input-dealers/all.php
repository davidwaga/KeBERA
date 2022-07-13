<?php 
header("Content-Type: application/json");
include_once "../../models/InputDealerModal.php";
include_once "../../helpers.php";
$helper = new Helper();
$dealer = new InputDealer();

$d = [];
foreach($dealer->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($d, [
        "input_dealer_id"=>$row['input_dealer_id'],
        "location"=>$row['location'],
        "user_id"=>$row["user_id"],
        "created_at"=>$row["created_at"],
        "updated_at"=>$row["updated_at"],
        "user"=>$helper->get_user($row["user_id"])
    ]);
}
echo json_encode(['input_dealers'=>$d, "status"=>1]);