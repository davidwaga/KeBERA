<?php 
include_once "../../helpers.php";
class User{
    public $user_id, $name, $phone_number,$user_type, $email, $passw, $avatar, $bio, $remember;
    private $conn;
    public $helper;
    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from user");
    }
    
    public function register(){        
        return $this->conn->query("insert into user set username=:name, password=:passw, email=:mail, remember_token=:remember, profile_pic=:avatar, bio=:bio, user_type_id=:user_type, phone_number=:phone_number", 
            [
                ":name"=>$this->name, 
                ":mail"=>$this->email, 
                ":passw"=>password_hash($this->passw, PASSWORD_DEFAULT),
                ":bio"=>$this->bio,
                ":user_type"=>$this->user_type,
                ":remember"=>$this->remember,
                ":avatar"=>$this->avatar,
                ":phone_number"=>$this->phone_number
            ]);
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
    public function user_types(){
        return $this->conn->query("select * from user_type");
    }
    public function logout(){    
        return $this->conn->deleteToken();
    }
    public function confirm_email(){

    }
    public function active_or_deactivate(){

    }
    public function make_admin(){
        
    }
}
