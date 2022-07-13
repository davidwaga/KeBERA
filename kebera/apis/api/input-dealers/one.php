<?php 
header("Content-Type: application/json");
include_once "../../models/InputDealerModal.php";
include_once "../../models/InputModal.php";
include_once "../../helpers.php";
$helper = new Helper();
$dealer = new InputDealer();
$input = new Input();

$d = [];
$id = $_GET['id'];
$row = $dealer->one($id)->fetch(PDO::FETCH_ASSOC);
if($dealer->one($id)->rowCount()>0){
    $p["input_dealer_id"]=$row['input_dealer_id'];
    $p["location"]=$row['location'];
    $p["user_id"]=$row["user_id"];
    $p["created_at"]=$row["created_at"];
    $p["updated_at"]=$row["updated_at"];
    $p["user"]=$helper->get_user($row["user_id"]);
    $i = [];
    foreach($input->inputs_for_dealer($row["input_dealer_id"])->fetchAll(PDO::FETCH_ASSOC) as $t){
        array_push($i, $t);
    }
    $p['inputs']=$i;
}else{
    $p['message']='Input dealer not found';
}

echo json_encode($p);