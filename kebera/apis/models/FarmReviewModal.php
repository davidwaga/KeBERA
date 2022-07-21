<?php
include_once "../../helpers.php";
class FarmReview{
    public $farm_review_id,	$farm_review,	$farm_id,	$user_id,	$created_at,	$updated_at;
    private $conn, $tb_name='farm_review';

    public function __construct(){
        $this->conn = new Helper();
    }

    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        return $this->conn->query("select * from $this->tb_name where farm_review_id=:id",[":id"=>$id]);
    }
    public function farm_reviews($id){
        return $this->conn->query("select * from $this->tb_name where farm_id=:id",[':id'=>$id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set farm_review=:review, farm_id=:farm_id, user_id=:user",[':review'=>$this->farm_review,':farm_id'=>$this->farm_id,':user'=>$this->user_id]);
    }
    public function edit($id){
        return $this->conn->query("update $this->tb_name set farm_review=:review, farm_id=:farm_id, user_id=:user where farm_review_id=:id",[':review'=>$this->farm_review,':farm_id'=>$this->farm_id,':user'=>$this->user_id,':id'=>$id]);
    }
    public function remove($id){
        return $this->conn->query("delete from $this->tb_name where farm_review_id=:id",[':id'=>$id]);
    }
}