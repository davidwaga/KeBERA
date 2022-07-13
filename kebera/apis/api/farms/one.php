<?php
header('Content-Type: application/json');
include_once "../../helpers.php";
include_once "../../models/FarmModal.php";
include_once "../../models/FarmReviewModal.php";
$farm = new Farm();
$review = new FarmReview();
$id = $_GET['id'];

$farms = $farm->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode([
    "farm"=>$farms,
    'reviews'=>$review->farm_reviews($id)->fetchAll(PDO::FETCH_ASSOC)
]);