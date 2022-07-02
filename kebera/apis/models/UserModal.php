<?php 
include_once "../../helpers.php";
class User{
    private $id, $name, $user_type, $email, $passw;
    private $conn;
    public $helper;
    public function __construct(){
        $this->conn = new Helper();
        
    }
    public function index(){
        return $this->conn->query("select * from user");
    }
    
    public function register(){
        return $this->conn->query("insert into user set name=:name, passw=:passw, mail=:mail", [":name"=>$this->name, ":mail"=>$this->email, ":passw"=>password_hash($this->passw, PASSWORD_DEFAULT)]);
    }
    public function one($id){
        return $this->conn->query("select * from user where id=:id", [":id"=>$id]);
    }

    public function login(){

    }
    public function register(){

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