<?php 
header("Content-Type: application/json");
header("Accept: POST");

include_once "../../models/UserModal.php";
include_once "../../helpers.php";
$user = new User();
$help = new Helper();

$data = json_decode(file_get_contents("php://input"), true);
$user->name = $data["username"];
$user->passw = $data["passw"];
if($help->has_account($user->name)){
    $logged_in = $user->login()->fetch(PDO::FETCH_ASSOC);
    if(password_verify($user->passw,$logged_in['passw'])){
        $res["status"]=1;
        $res["message"]="Login was successful";
        $res["auth_token"]=$help->create_token($logged_in["id"]);
        
    }else{
        $res["status"]=0;
        $res["message"]="Either usernam or password is wrong!";
    }
}else{
    $res["status"]=0;
    $res["message"]="Account does not exist, please register to continue!";
}
echo json_encode($res);





