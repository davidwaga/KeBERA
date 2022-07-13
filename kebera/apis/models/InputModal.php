<?php 
include_once "../../helpers.php";
class Input{
    public $inputs_id, $name, $code, $test_results, $price, $updated_at, $inputs_dealer;
    private $conn, $tb_name='inputs';

    public function __construct(){
        $this->conn = new Helper();
    }
    public function index(){
        return $this->conn->query("select * from $this->tb_name");
    }
    public function one($id){
        return $this->conn->query("select * from $this->tb_name where inputs_id=:id",[':id'=>$id]);
    }
    public function inputs_for_dealer($id){
        return $this->conn->query("select * from inputs where inputs_dealer=:id",[':id'=>$id]);
    }
    public function create(){
        return $this->conn->query("insert into $this->tb_name set name=:name,code=:code,test_results=:test_results,price=:price,inputs_dealer=:inputs_dealer",[
            ':name'=>$this->name,
            ':code'=>$this->code,
            ':test_results'=>$this->test_results,
            ':price'=>$this->price,
            ':inputs_dealer'=>$this->inputs_dealer]
        );
    }
    public function edit($id){
        $this->inputs_id = $id;
        return $this->conn->query("update $this->tb_name set name=:name,test_results=:test_results,price=:price,inputs_dealer=:inputs_dealer where inputs_id=:id",[
            ':name'=>$this->name,            
            ':test_results'=>$this->test_results,
            ':price'=>$this->price,
            ':inputs_dealer'=>$this->inputs_dealer,
            ":id"=>$this->inputs_id
        ]);
    }
    public function remove($id){
        $this->inputs_id = $id;
        return $this->conn->query("delete from $this->tb_name where inputs_id=:id",[':id'=>$this->inputs_id]);
    }
}