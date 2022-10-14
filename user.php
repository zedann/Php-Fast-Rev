<?php
class user
{
    public $name;
    public function insert(){
        // echo "user : " . $this->name;
        print_r("hi from hi");
    }
    public function hi(){
       $this->insert();
    }
}