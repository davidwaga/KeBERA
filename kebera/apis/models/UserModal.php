<?php 
include_once "../../helpers.php";
class User{
    public $id, $name, $user_type, $email, $passw;
    private $conn;
    public $helper;
    public function __construct(){
        $this->conn = new Helper();
        
    }
    public function index(){
        return $this->conn->query("select * from user");
    }
    
    public function register(){        
        return $this->conn->query("insert into user set `username`=:name, passw=:passw, email=:mail", [":name"=>$this->name, ":mail"=>$this->email, ":passw"=>password_hash($this->passw, PASSWORD_DEFAULT)]);
    }
    public function one($id){
        return $this->conn->query("select * from user where id=:id", [":id"=>$id]);
    }

    public function login(){
        return $this->conn->query(
            "select * from user where username=:name or email=:name", 
            [
                ":name"=>$this->name
            ]);
    }
    
    public function logout(){

    }
    public function confirm_email(){

    }
    public function active_or_deactivate(){

    }
    public function make_admin(){
        
    }
}
