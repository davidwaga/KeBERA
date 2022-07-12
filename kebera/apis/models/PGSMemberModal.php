<?php 
include_once "../../helpers.php";


class PGSMember{
    public $pgs_members_id, $user_id, $pgs_id, $updated_at;
    private $conn, $tb_name="pgs_members";

    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        return $this->conn->query("select * from $this->tb_name where pgs_members_id=:id",[':id'=>$id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set pgs_id=:pgs, user_id=:user",[':pgs_id'=>$this->pgs_id,":user"=>$this->user_id]);
    }
    public function edit($id){
        $this->pgs_members_id = $id;
        return $this->conn->query("update $this->tb_name set pgs_id=:pgs, user_id=:user where pgs_members_id=:member",[':pgs_id'=>$this->pgs_id,":user"=>$this->user_id, ':member'=>$this->pgs_members_id]);
    }
    public function remove($id){
        return $this->conn->query('delete from $this->tb_name where pgs_members_id=:id',[':id'=>$id]);
    }
}