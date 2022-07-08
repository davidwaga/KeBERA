<?php 
include_once "../../helpers.php";

class Product{
    public $product_id, $product_name, $product_pic, $product_description, $proudct_stock, $user_id, $category_id, $product_price, $size_variation_id, $stall_id, $farm_id, $update;
    private $conn, $tb_name='products';
    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        $this->product_id = $id;
        return $this->conn->query("select * from $this->tb_name where product_id=:id",[':id'=>$this->product_id]);
    }
    public function create(){
        return $this->conn->query("insert into ");
    }
}