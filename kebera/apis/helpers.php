<?php 
include_once "../../../config/db.php";

class Helper{
    protected $conn;
    public function __construct(){        
        $this->conn = new Database();
        $this->conn = $this->conn->connect();        
    }
    public function checkToken($token, $user){
        
    }
    public function generateToken(){
        
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
}