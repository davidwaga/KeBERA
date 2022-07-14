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
    public function logged_in_user_id($token){
        $user_token = $this->query("select * from tokens where token=:token",[":token"=>$token]);
        $user = $user_token->fetch(PDO::FETCH_ASSOC);
        return $user["user_id"];
    }
    public function get_user_type(){
        $i = isset($_SESSION['TOKEN'])?$_SESSION['TOKEN']:null;
        if($i==null){
            $p = 0;
        }else{
            $user_token = $this->query("select * from tokens where token=:token",[":token"=>$i]);
            $user = $user_token->fetch(PDO::FETCH_ASSOC);
            $p = $user["user_type_id"];
        }
        return $p;
    }
    public function get_user($i){
        $p = $this->query("select * from user where user_id=:id",[':id'=>$i]);
        $p = $p->fetch();
        return [
            "user_id"=>$p['user_id'],
            "username"=>$p['username'],
            "email"=>$p['email'],
            "bio"=>$p['bio'],
            "user_type_id"=>$p['user_type_id'],
            "profile_pic"=>$p['profile_pic']
        ];
        
    }

    public function create_token($id){
        $token = sha1(date('Y-m-d').$id.rand(1000,9000000));
        $_SESSION['TOKEN']=$token;
        $this->query("INSERT INTO tokens SET token=:token, user_id=:id",[":id"=>$id,':token'=>$token]);
        return $token;
    }
    public function deleteToken(){
        $this->query("delete from tokens where token=:token",[':token'=>$_SESSION['TOKEN']]);
        $_SESSION['TOKEN']=null;
        $_SESSION['TYPE']=null;
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

    public function upload_file($path, $g){
        
        // die(json_encode($_FILES));
        $file = $_FILES;
        $currentDirectory = getcwd();
        $uploadDirectory = '/assets/img/'.$path.'/';
        $errors = []; // Store errors here

        $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmpName  = $file['tmp_name'];
        $fileType = $file['type'];
        $fileExtension = strtolower(end(explode('.',$fileName)));

        $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

    }
}