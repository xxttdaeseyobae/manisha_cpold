<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/hamroluga/classes/Database.php");

class Book{
 		private $db;
 		public $name,
 				$username,
 				$days;

 		
    function __construct(){
        try{
            $this->db= Database::getInstance();
        }catch(PDOExpection $e){
            die($e->getMessage());
        }
    }


	public function book(){
    	$sql="INSERT INTO book SET username='$this->username', days='$this->days', name='$this->name'";
    	if(mysqli_query($this->db->_con,$sql)) {
    		return true;
    	}else{
    		echo"error:".$sql."<br>". mysqli_erro($this->db->_con);
			return false;
		}

}
}
?>