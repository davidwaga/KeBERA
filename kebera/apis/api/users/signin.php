<?php 

$data = json_decode(file_get_contents("php://input"), true);
// echo $data;
echo json_encode(["id"=>34, "username"=>$data["username"], "passw"=>$data["passw"],"password"=>password_hash($data["pwd"], PASSWORD_DEFAULT)]);