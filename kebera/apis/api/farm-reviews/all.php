<?php 
header("Content-Type: application/json");

include_once "../../models/FarmReviewModal.php";

$review = new FarmReview();

$reviews = [];

foreach($review->index()->fetchAll(PDO::FETCH_ASSOC) as $row){
    array_push($reviews, $row);
}

echo json_encode($reviews);