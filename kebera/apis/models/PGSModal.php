<?php 
include_once "../../helpers.php";
class PGS{
    public $pgs_id, $pgs_name, $pgs_location, $user_id, $updated_at;
    private $conn, $tb_name='pgs';

    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->pgs_id = $id;
        return $this->conn->query("select * from $this->tb_name where pgs_id=:id",[":id"=>$this->pgs_id]);
    }
    public function member($id){
        $this->pgs_id = $id;
        return $this->conn->query("select * from pgs_members where pgs_id=:id",[':id'=>$this->pgs_id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set pgs_name=:name, pgs_location=:location, user_id=:user",[':name'=>$this->pgs_name, ':location'=>$this->pgs_location, ':user'=>$this->user_id]);
    }
    public function edit($id){
        $this->pgs_id = $id;
        return $this->conn->query("update $this->tb_name set pgs_name=:name, pgs_location=:location, user_id=:user where pgs_id=:id",[':name'=>$this->pgs_name, ':location'=>$this->pgs_location, ':user'=>$this->user_id, ':id'=>$this->pgs_id]);   
    }
    public function remove($id){
        $this->pgs_id = $id;
        return $this->conn->prepare("delete from $this->tb_name where pgs_id=:id",[':id'=>$this->pgs_id]);
    }

}