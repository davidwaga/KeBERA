<?php

include_once "../../helpers.php";
class Farm{
    public $farm_id,$name,	$farm_location,	$longitude,	$latiude,	$created_at,	$updated_at;
    private $conn, $tb_name='farm';

    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->farm_id = $id;
        return $this->conn->query("select * from $this->tb_name where farm_id=:id",[':id'=>$this->farm_id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set name=:name,farm_location=:location,longitude=:longitude, latiude=:latitude",[':name'=>$this->name,':location'=>$this->farm_location,':longitude'=>$this->longitude,':latitude'=>$this->latiude]);
    }
    public function edit($id){
        $this->farm_id = $id;
        return $this->conn->query("update $this->tb_name set name=:name,farm_location=:location,longitude=:longitude, latiude=:latitude where farm_id=:id",[':name'=>$this->name,':location'=>$this->farm_location,':longitude'=>$this->longitude,':latitude'=>$this->latiude,':id'=>$this->farm_id]);
    }
    public function remove($id){
        $this->farm_id = $id;
        return $this->conn->query("delete from $this->tb_name where farm_id=:id",[':id'=>$id]);
    }
}