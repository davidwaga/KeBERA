<?php 
header('Content-Type: application/json');
header('Accept: DELETE');

include_once "../../models/FarmReviewModal.php";

$t = new FarmReview();

$id = $_GET['id'];

$t->remove($id);
$p['status']=1;
$p['message']='Review removed';

echo json_encode($p);