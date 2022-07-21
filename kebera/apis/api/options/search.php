<?php 
header("Content-Type: application/json");
include_once "../../helpers.php";

$helper = new Helper();

$q = $_GET['q'];
$q = '%'.$q.'%';




$search["inputs"]=[];
$search["users"]=[];
$search["products"]=[];
$search["pgs"]=[];

//products
$prod = $helper->query("select * from product where product_name  like :q",[":q"=>$q]);
foreach($prod->fetchAll(PDO::FETCH_ASSOC) as $pr){
    array_push($search['products'],["product_name"=>$pr['product_name'],"product_id"=>$pr["product_id"]]);
}

//pgs
$prod = $helper->query("select * from pgs where pgs_name  like :q or pgs_location like :q",[":q"=>$q]);
foreach($prod->fetchAll(PDO::FETCH_ASSOC) as $pr){
    array_push($search['pgs'],["pgs_id"=>$pr['pgs_id'],"pgs_name"=>$pr["pgs_name"],"pgs_location"=>$pr['pgs_location']]);
}


echo json_encode($search);


