<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 7/11/2019
 * Time: 12:47 PM
 */
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/classes/Database.php");

class Product{
    private $db;
    public 	$name,
        $price,
        $image,
        $description;


    function __construct(){
        try{
            $this->db= Database::getInstance();
        }catch(PDOExpection $e){
            die($e->getMessage());
        }
    }

    public function create(){
        $sql="INSERT INTO mens SET product_name='$this->name', price='$this->price', image='$this->image', description='$this->description'";
        if(mysqli_query($this->db->_con,$sql)) {
            return true;
        } else{
            echo"error:".$sql."<br>". mysqli_erro($this->db->_con);
            return false;
        }
    }

    public function getAll(){
        $sql="SELECT * FROM mens";
        $result = $this->db->_con->query($sql);
        if($result->num_rows> 0){
            return $result;
        }
        return false;
    }

    public function getById($id){
        $sql="SELECT * FROM mens WHERE id='$id' ";
        $result=$this->db->_con->query($sql);
        if($result->num_rows > 0){
            $row=$result->fetch_assoc();
            return $row;
        }else{
            return false;
        }
    }

    public function delete($id){
        $sql="DELETE FROM mens WHERE id='$id'";
        $result = $this->db->_con->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }

    }


    public function edit($id){
        $sql="UPDATE mens
	    SET product_name='$this->name',price='$this->price', image='$this->image', description='$this->description'
	    WHERE id = $id";
        $result=$this->db->_con->query($sql);
        if($result){
            return true;
        }
        return false;
    }




}
?>