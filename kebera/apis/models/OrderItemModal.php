<?php 
include_once "../../helpers.php";
class OrderItem{
    private $conn;
    private $tb_name = 'order_items';
    public $order_item_id, $quantity, $colour_variation_id, $order_id;
    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->order_item_id = $id;
        return $this->conn->query("select * from $this->tb_name where order_item_id=:order_item_id",[":order_item_id"=>$this->order_item_id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set quantity=:quantity, colour_variation_id=:colour_variation_id, order_id=:order_id",[
            ":quantity"=>$this->quantity,
            ":colour_variation_id"=>$this->quantity,
            ':order_id'=>$this->order_id
        ]);
    }
    public function edit($id){
        $this->order_item_id;
        return $this->conn->query("update $this->tb_name set quantity=:quantity, colour_variation_id=:colour_variation_id, order_id=:order_id",[
            ":quantity"=>$this->quantity,
            ":colour_variation_id"=>$this->quantity,
            ':order_id'=>$this->order_id,
            ':order_item_id'=>$this->order_item_id
        ]); 
    }
    public function remote($id){
        $this->order_item_id = $id;
        return $this->conn->query("delete from $this->tb_name where order_item_id=:$this->order_item_id",[":order_item_id"=>$this->order_item_id]);
    }
}