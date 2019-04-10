<?php
require_once("config.php") ;
class Database{
    //connection is supposed to be private but let's wait and see
    public $connection;

    function __construct(){
       
       $this->open_db_connection();


    }


public function open_db_connection(){

$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(mysqli_connect_errno()){
    die("Database connection failed" . mysqli_error($this->connection));
}

}


}
$database = new Database();



?>