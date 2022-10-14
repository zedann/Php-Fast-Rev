<?php
require_once "./env.php";
require_once "./dbstd.php";
class UserModel implements dbstd
{
    public $connection;
    public function __construct()
    {
        $this->connentDB();
    }
    protected function connentDB(){
        $this->connection = mysqli_connect(SERVER,USER,PASS,DBNAME);
    }
    public function insert(){
        $stmt = mysqli_query($this->connection ,"INSERT INTO users (name) VALUES ('ZEDAN')");
    }
    public function select(){
        $stmt = mysqli_query($this->connection ,"SELECT * FROM `users`");
        while($row = mysqli_fetch_assoc($stmt)){
            $data[]=$row;
        }
        return $data;
    }
    public function update(){

    }
    public function delete(){

    }
}