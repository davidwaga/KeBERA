<?php 
include_once "../../helpers.php";
class InputDealer{
    public $input_dealer_id, $user_id, $location,$updated_at;
    private $conn, $tb_name='input_dealer';

    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        return $this->conn->query("select * from $this->tb_name where input_dealer_id=:id",[':id'=>$id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set user_id=:user, location=:location",[':user'=>$this->user_id,':location'=>$this->location]);
    }
    public function edit($id){
        return $this->conn->query("update $this->tb_name set user_id=:user, location=:location, updated_at=CURRENT_TIMESTAMP where input_dealer_id=:id",[':location'=>$this->location,':user'=>$this->user_id,':id'=>$id]);
    }
    public function remove($id){
        return $this->conn->query("delete from $this->tb_name where input_dealer_id=:id",[":id"=>$id]);
    }
}