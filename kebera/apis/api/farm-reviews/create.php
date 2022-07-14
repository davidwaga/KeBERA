<?php
header('Content-Type: application/json');
include_once "../../helpers.php";
include_once "../../models/FarmReviewModal.php";

$review = new FarmReview();
$helper = new Helper();
$data = json_decode(file_get_contents('php://input'), true);
$review->farm_review=$data['farm_review'];	
$review->farm_id = $data['farm_id'];
$review->user_id = $helper->logged_in_user_id($_SESSION['TOKEN']);

if($review->create()){
    $r['status']=1;
    $r['message']='Review added successfully...';
}else{
    $r['status']=0;
    $r['message']='Review not added...';
}
echo json_encode($r);