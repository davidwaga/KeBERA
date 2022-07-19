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
            "profile_pic"=>$p['profile_pic'],
            "phone_number"=>$p['phone_number'],
        ];        
    }
    public function get_farm($id){
        $p = $this->query("select * from farm where farm_id=:id",[':id'=>$id]);
        $p = $p->fetch();
        return [
            "farm_id"=>$p['farm_id'],
            "name"=>$p['name'],
            "farm_location"=>$p['farm_location'],
            "longitude"=>$p['longitude'],
            "latiude"=>$p['latiude'],
            "created_at"=>$p['created_at'],
            "updated_at"=>$p['updated_at'],
        ];
    }
    public function get_stall($id){
        $p = $this->query("select * from stall where stall_id=:id",[':id'=>$id]);
        $p = $p->fetch();
        return [
            "stall_id"=>$p['stall_id'],
            "stall_number"=>$p['stall_number'],
            "market_id"=>$p['market_id'],
            "created_at"=>$p['created_at'],
            "updated_at"=>$p['updated_at'],
            "market"=>$this->get_market($p['market_id'])
        ];
    }
    public function get_market($id){
        $p = $this->query("select * from market where market_id=:id",[':id'=>$id]);
        $p = $p->fetch();
        return [
            "market_id"=>$p['market_id'],
            "name"=>$p['name'],
            "latitude"=>$p['latitude'],
            "longitude"=>$p['longitude'],
            "user"=>$this->get_user($p['user_id']),
        ];
    }
    public function get_category($id){
        $p = $this->query("select * from category where category_id=:id",[':id'=>$id]);
        $p = $p->fetch();
        return [
            "category_id"=>$p['category_id'],
            "name"=>$p['name'],
            "created_at"=>$p['created_at'],
            "updated_at"=>$p['updated_at'],
        ];
    }
    public function get_size_variation($id){
        $p = $this->query("select * from size_variation where size_variation_id=:id",[':id'=>$id]);
        $p = $p->fetch();
        return [
            "size_variation_id"=>$p['size_variation_id'],
            "name"=>$p['name'],
            "created_at"=>$p['created_at'],
            "updated_at"=>$p['updated_at'],
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
        $user = $this->query("SELECT * FROM user WHERE username=:txt OR email=:txt OR phone_number=:txt",[':txt'=>$txt]);
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