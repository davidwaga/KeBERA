<?php 
include_once "../../helpers.php";
class Stall{
    public $stall_id, $stall_number, $market_id;
    private $conn;
    public $helper;
    private $tb_name = 'stall';
    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->stall_id = $id;
        return $this->conn->query("select * from $this->tb_name where stall_id=:stall_id",[':stall_id'=>$this->stall_id]);
    }
    public function create(){        
        return $this->conn->query("insert into $this->tb_name set stall_number=:stall_number, market_id=:market_id",[':stall_number'=>$this->stall_number, ':market_id'=>$this->market_id]);
    }
    public function edit($id){
        $this->stall_id = $id;
        return $this->conn->query("update $this->tb_name set stall_number=:stall_number, market_id=:market_id where stall_id=:stall_id",[":stall_id"=>$this->stall_id]);
    }
    public function remove($id){
        $this->stall_id = $id;
        return $this->conn->query("delete from $this->tb_name where stall_id=:stall_id",[":stall_id"=>$this->stall_id]);
    }
}