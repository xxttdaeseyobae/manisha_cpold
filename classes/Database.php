<?php
class Database{

    private $db_server = 'localhost',
        $db_usernmae = 'root',
        $db_password ='',
        $db_database='hamroluga';
    public $_con;
    public static $_instance;

    function __construct(){
        try {
            $this->_con =  new mysqli($this->db_server,$this->db_usernmae,$this->db_password,$this->db_database);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new Database();
        }
        return self::$_instance;
    }
}
?>