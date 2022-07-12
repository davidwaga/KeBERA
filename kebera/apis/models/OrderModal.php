<?php
include_once "../../helpers.php";
class Order{
    public $order_id, $ordered_date, $ordered, $shipping_address, $billing_address, $user_id;
    private $tb_name = 'orders';
    private $conn;
    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->order_id = $id;
        return $this->conn->query("select * from $this->tb_name where order_id=:id",[":id"=>$this->order_id]);
    }
    public function items($id){
        $this->order_id = $id;
        return $this->conn->query("select * from order_items where order_id=:id",[":id"=>$this->order_id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set ordered_date=:ordered_date, ordered=:ordered, shipping_address=:shipping_address, billing_address=:billing_address,user_id=:user_id",[
            ":order_date"=>$this->order_date,
            ":ordered"=>$this->ordered,
            ":shipping_address"=>$this->shipping_address,
            ":billing_address"=>$this->billing_address,
            ":user_id"=>$this->user_id
        ]);
    }
    public function edit($id){
        $this->order_id = $id;
        return $this->conn->query("update $this->tb_name set ordered_date=:ordered_date, ordered=:ordered, shipping_address=:shipping_address, billing_address=:billing_address,user_id=:user_id where order_id=:order_id",[
            ":order_date"=>$this->order_date,
            ":ordered"=>$this->ordered,
            ":shipping_address"=>$this->shipping_address,
            ":billing_address"=>$this->billing_address,
            ":user_id"=>$this->user_id,
            ":order_id"=>$this->order_id
        ]);
    }
    public function remove($id){
        $this->order_id = $id;
        return $this->conn->query("delete from $this->tb_name where order_id=:order_id",[":order_id"=>$this->order_id]);
    }
}