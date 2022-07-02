<?php 
header("Content-Type: application/json");
header("Accept: POST");

include_once "../../models/UserModal.php";
$user = new User();
$data = json_decode(file_get_contents("php://input"), true);
$user->name = $data["name"];
$user->email = $data["email"];
$user->passw = $data["passw"];
if($user->register()){
    $res["status"]=1;
    $res["message"]="User register successfully!";
}else{
    $res["status"]=0;
    $res["message"]="User was not register!";
}
echo json_encode($res);





