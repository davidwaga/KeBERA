<?php 
header("Content-Type: application/json");
header("Accept: DELETE");

include_once "../../models/CategoryModal.php";
include_once "../../helpers.php";
$category = new Category();
$help = new Helper();

$id = $_GET['id'];

if($category->remove($id)){
    $res['status']=1;
    $res['message']='Category was deleted successfully...';
}else{
    $res['status']=0;
    $res['message']='Failed to delete category...';
}

echo json_encode($res);
