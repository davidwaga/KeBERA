<?php 
header("Content-Type: application/json");
header("Accept: GET");
include_once "../../helpers.php";
include_once "../../models/PGSModal.php";

$helper = new Helper();
$pgs = new PGS();

$rs = Array();

foreach($pgs->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($rs, Array(
        "pgs_id"=>$row['pgs_id'],
        "members"=>$pgs->num_of_members($row['pgs_id'])->fetch()['members'],
        "pgs_name"=>$row['pgs_name'],'created_at'=>$row['created_at'],"pgs_location"=>$row['pgs_location'],"user"=>$helper->get_user($row["user_id"])));
}

echo json_encode(["pgs"=>$rs, "number_of_pgs"=>$pgs->index()->rowCount()]);
