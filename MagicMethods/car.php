<?php
class car {
    // public function move(){
    //     echo "move";
    // }
    // public function __call($name_method, $arguments)
    // {
    //     echo "this method " . $name_method . " not found";
    //     echo "<pre>";
    //     print_r($arguments);
    // }
    // public function __set($name, $value)
    // {
    //     echo "this property $name is not found and its value $value";
    // }
    // public function __get($name)
    // {
    //     echo "property $name is not found!";
    // }

    public $color;
    public function move(){
        echo "car moving";
    }
    public function __call($name, $arguments)
    {
      if(count($arguments) > 0){
        echo "test " . $arguments[0];
      }  
      else if(count($arguments) == 0) echo "test";
    }
}

class bmw extends car{
    
    public function move()
    {
        echo "bmw moving";
    }
    
    
}