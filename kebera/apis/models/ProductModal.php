<?php 
include_once "../../helpers.php";

class Product{
    public $product_id, $product_name, $product_pic, $product_description, $proudct_stock, $user_id, $category_id, $product_price, $size_variation_id, $stall_id, $farm_id, $update;
    private $conn, $tb_name='product';
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
        return $this->conn->query("insert into $this->tb_name set product_name=:product_name, product_pic=:product_pic, product_description=:product_description, 
                                product_stock=:product_stock, product_price=:product_price, category_id=:category_id, size_variation_id=:size_variation_id, stall_id=:stall_id, 
                                farm_id=:farm_id",
                                [
                                    ':product_name'=>$this->product_name, 
                                    ':product_pic'=>$this->product_pic,
                                    ':product_description'=>$this->product_description,
                                    ':product_stock'=>$this->product_stock,
                                    ':product_price'=>$this->product_price,
                                    ':category_id'=>$this->category_id,
                                    ':size_variation_id'=>$this->size_variation_id,
                                    ':stall_id'=>$this->stall_id,
                                    ':farm_id'=>$this->farm_id,

                                ]
                                );
    }
    public function edit($id){
        $this->product_id = $id;
        return $this->conn->query("update $this->tb_name set product_name=:product_name, product_pic=:product_pic, product_description=:product_description, 
                                product_stock=:product_stock, product_price=:product_price, category_id=:category_id, size_variation_id=:size_variation_id, stall_id=:stall_id, 
                                farm_id=:farm_id where product_id=:product_id",[":product_id"=>$this->product_id]
                                );
    }
    public function remove($id){
        $this->product_id = $id;
        return $this->conn->query("delete from $this->tb_name where product_id=:product_id",[":product_id"=>$this->product_id]);
    }
}