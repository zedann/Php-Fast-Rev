<?php

require_once "typeInterface.php";
class word implements typeInterface{
    public function executePdf(){
        echo "print word";
    }
}