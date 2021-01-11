
<?php
include_once ('Database.php');

class ProductUser{
    private $db;
    public $product_id,
        $user_id,
        $status; // cart , buy;

    function __construct(){
        try {
            $this->db = Database::getInstance();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function create(){
        $sql="INSERT INTO product_user SET product_id='$this->product_id', user_id='$this->user_id', status='CART'";
        if(mysqli_query($this->db->_con,$sql)) {
            return true;
        } else{
            echo"error:".$sql."<br>". mysqli_error($this->db->_con);
            return false;
        }
    }

    public function delete($id){
        $sql="DELETE FROM product_user WHERE id='$id'";
        $result = $this->db->_con->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }

    }


    public function deleteBoughtProduct($user_id){
        $sql="DELETE FROM product_user WHERE user_id='$user_id' AND status= 'BUY'";
        $result = $this->db->_con->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    public function updateToBuy($id){
        $sql="UPDATE product_user
	    SET status= 'BUY'
	    WHERE id = '$id'";
        $result=$this->db->_con->query($sql);
        if($result){
            return true;
        }
        return false;
    }

    public function getAll(){
        $sql = "SELECT p.product_name, p.image, p.price, p.description, pu.status, u.email, u.username
				FROM product_user pu
				INNER JOIN product p
				    on pu.product_id = p.id
				INNER JOIN users u
				    on pu.user_id = u.id";
        $result = $this->db->_con->query($sql);
        if($result->num_rows> 0){
            return $result;
        }
        return false;
    }


    public function getByUser($user_id){
        $sql = "SELECT pu.id, p.product_name, p.image, p.price, p.description, pu.status, u.email, u.username
				FROM product_user pu
				INNER JOIN product p
				    on pu.product_id = p.id
				INNER JOIN users u
				    on pu.user_id = u.id
			    WHERE pu.user_id = '$user_id'";
        $result = $this->db->_con->query($sql);
        if($result->num_rows> 0){
            return $result;
        }
        return false;
    }

}

?>