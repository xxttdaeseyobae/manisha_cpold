<?php
include_once ('Database.php');
class User{
	private $db;
	public $username,
			$fullname,
			$password,
			$email,
			$is_admin;


	function __construct(){
		try {
	      $this->db = Database::getInstance();
	    }catch(PDOException $e){
	      die($e->getMessage());
	    }
	}

	public function resgister(){
		if($this->checkForDuplicateEmail()){
			echo "Email already exist.";
		}else{
			$sql="INSERT INTO Users SET username='$this->username', password='$this->password', fullname='$this->fullname', email='$this->email'";
			if (mysqli_query($this->db->_con, $sql)) {
				return true;
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($this->db->_con);
				return false;
			}
		}

	}

	public function login(){
		$sql="SELECT id,username FROM Users WHERE email= '$this->email' AND password='$this->password'";
		$result = $this->db->_con->query($sql);
		$rowData = $result->fetch_assoc();
			if($rowData){
				$_SESSION['login'] = true;
				$_SESSION['id'] = $rowData['id'];
				$_SESSION['username'] = $rowData['username'];
				return true;
			}else{ 
				return false;
			}
	}


	public function adminLogin(){
		$sql="SELECT id, isadmin, username FROM Users WHERE email= '$this->email' AND password='$this->password'";
		$result = $this->db->_con->query($sql);
		$rowData = $result->fetch_assoc();
		if($rowData){
			if($rowData['isadmin']== 1){
				$_SESSION['login'] = true;
				$_SESSION['id'] = $rowData['id'];
				$_SESSION['username'] = $rowData['username'];
				return true;
			}
		}
		return false;
	}

	public static function logout(){
		$_SESSION['login'] = FALSE;
		session_destroy();
	}

	public static function getSession(){ //returns login session
		if($_SESSION){
			if($_SESSION['login']){
				return true;
			}
		}
		return false;
	}

	public function getUser($id){
		$sql="SELECT * FROM Users WHERE id = '$id'";
		$result = $this->db->_con->query($sql);
		$rowData = $result->fetch_assoc();
		print_r($rowData);
	}
/*---------------admin ma lahgane-----*/
public function  getAll(){
	       $sql = "SELECT *
                FROM users";
        $result = $this->db->_con->query($sql);
        if($result->num_rows> 0){
            return $result;
        }
        return false;

}

	private function checkForDuplicateEmail(){
		$sql="SELECT * FROM Users WHERE email='$this->email'";
		$check = $this->db->_con->query($sql);
		$count_row = $check->num_rows;
		if($count_row == 0){
			return false;
		}
		return true;
	}
}
?>

