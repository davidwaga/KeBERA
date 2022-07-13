<?php 
header("Content-Type: application/json");

include_once "../../models/FarmReviewModal.php";
include_once "../../helpers.php";
$helpers = new Helper();
$review = new FarmReview();
$id = $_GET['id'];
$reviews = $review->one($id)->fetch(PDO::FETCH_ASSOC);

echo json_encode($reviews);