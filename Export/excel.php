<?php

require_once "typeInterface.php";
class excel implements typeInterface{
    public function executePdf(){
        echo "print excel";
    }
}