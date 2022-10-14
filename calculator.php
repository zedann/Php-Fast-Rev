<?php

class calculator{
    public float $x;
    public float $y;
    public function sum(){
        return $this->x + $this->y;
    }
    public function sub(){
        return $this->x - $this->y;
    }
    public function mult(){
        return $this->x * $this->y;
    }
    public function div(){
        return $this->x / $this->y;
    }
}