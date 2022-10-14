<?php

abstract class demo {
    public $name;
    public function index(){
        echo "index<br>";
    }
    public abstract function delete();
}


class soft extends demo{
    public function delete()
    {
        echo "delete<br>";
    }
}

$soft = new soft;
$soft->index();
$soft->delete();