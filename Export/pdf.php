<?php
require_once "typeInterface.php";
class pdf implements typeInterface{
    public function executePdf(){
        echo "print pdf";
    }
}