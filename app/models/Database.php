<?php 
    require(dirname(__FILE__).'/../../config/config.php');
    class Database
 {
    private $db=CONFIG['db'];
    private $username=CONFIG['username'];
    private $password=CONFIG['password'];
    protected function connect()
    {
        try {
           return new PDO($this->db,$this->username,$this->password);
        } 
        catch (PDOException $th)
        {
        return false;
        }
    }
 }
?>