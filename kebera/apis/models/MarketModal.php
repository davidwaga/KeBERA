<?php 
include_once "../../helpers.php";
class Market{
    public $market_id, $name, $longitude, $latitude, $user_id;
    private $tb_name = 'market';
    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->market_id = $id;
        return $this->conn->query("select * from $this->tb_name where market_id=:market_id",[':market_id'=>$this->market_id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set name=:name,longitude=:longitude, latitude=:latitude, user_id=:user_id",[':name'=>$this->name,':longitude'=>$this->longitude,':latitude'=>$this->latitude,':user_id'=>$this->user_id]);
    }
    public function edit($id){
        $this->market_id=$id;
        return $this->conn->query("update into $this->tb_name set name=:name, longitude=:longitude,latitude=:latitude, user_id=:user_id",[':name'=>$this->name,':longitude'=>$this->longitude,':latitude'=>$this->latitude,':user_id'=>$this->user_id]);
    }
    public function remove($id){
        $this->market_id=$id;
        return $this->conn->query("delete from $this->tb_name where market_id=:market_id",[':market_id'=>$this->market_id]);
    }
}