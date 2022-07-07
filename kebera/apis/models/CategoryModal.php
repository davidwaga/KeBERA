<?php 
include_once "../../helpers.php";
class Category{
    public $category_id, $name;
    private $conn, $tb_name="category";

    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->category_id = $id;
        return $this->conn->query("select * from $this->tb_name where category_id=:category_id",[':category_id'=>$this->category_id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set name=:name",[":name"=>$this->name]);
    }
    public function edit($id){
        $this->category_id = $id;
        return $this->conn->query("update $this->tb_name set name=:name where category_id=:category_id",[":name"=>$this->name,":category_id"=>$this->category_id]);
    }
    public function remove($id){
        $this->category_id = $id;
        return $this->conn->query("delete from $this->tb_name  where category_id=:category_id",[":category_id"=>$this->category_id]);
    }
}