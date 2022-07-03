<?php 
session_start();
include_once "../../../config/db.php";

class Helper{
    protected $conn;
    public function __construct(){        
        $this->conn = new Database();
        $this->conn = $this->conn->connect();        
    }
    public function checkToken($token, $user){
        
    }
    public function create_token($id){
        $token = sha1(date('Y-m-d').$id.rand(1000,9000000));
        // $token = hash_algos(date('Y-m-d').$id.rand(1000,9000000));
        $_SESSION['TOKEN']=$token;
        $this->query("INSERT INTO user_tokens SET token=:token, userId=:id",[":id"=>$id,':token'=>$token]);
        return $token;
    }
    public function deleteToken($token){
        
    }
    
    public function query($stmt, $params = []){
        $t = $this->conn->prepare($stmt);
        $t->execute($params);
        return $t;
    }
    public function user_logged_in(){

    }
    public function is_admin(){

    }
    public function is_farmer(){

    }
    public function is_consumer(){}

    public function has_account($txt){
        $user = $this->query("SELECT * FROM user WHERE username=:txt OR email=:txt",[':txt'=>$txt]);
        return $user->rowCount()>0?true:false;
    }
}