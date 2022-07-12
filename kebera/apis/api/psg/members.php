<?php
include_once "../../helpers.php";
include_once "../models/PGSModal.php";

$pgs = new PSG();
$helper = new Helper();

$id = $_GET['id'];

$members = [];

foreach($pgs->members($id)->fetchAll(PDO::FETCH_ASSOC) as $mem){
    array_push($members, $mem);
}

echo json_encode($members);

