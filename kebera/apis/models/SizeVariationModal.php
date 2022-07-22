<?php 
include_once "../../helpers.php";
class SizeVariation{
    public $size_variation_id, $name;
    private $conn, $tb_name="size_variation";

    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->size_variation_id = $id;
        return $this->conn->query("select * from $this->tb_name where size_variation_id=:size_variation_id",[':size_variation_id'=>$this->size_variation_id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set name=:name",[":name"=>$this->name]);
    }
    public function edit($id){
        $this->size_variation_id = $id;
        return $this->conn->query("update $this->tb_name set name=:name where size_variation_id=:size_variation_id",[":name"=>$this->name,":size_variation_id"=>$this->size_variation_id]);
    }
    public function remove($id){
        $this->size_variation_id = $id;
        return $this->conn->query("delete from $this->tb_name  where size_variation_id=:size_variation_id",[":size_variation_id"=>$this->size_variation_id]);
    }
}