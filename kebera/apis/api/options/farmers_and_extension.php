<?php 
header('Content-Type: application/json');
include_once "../../helpers.php";

$help = new Helper();

$t = $help->query('select * from user where user_type_id="1" or user_type_id="3" and user_id!=(select user_id from pgs_members)');
$m = [];
foreach($t->fetchAll(PDO::FETCH_ASSOC) as $rt){
    array_push($m, $rt);
}
echo json_encode(['options'=>$m]);