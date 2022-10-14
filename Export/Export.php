<?php

require_once "abstractExport.php";
class Export extends abstractExport{
    private $file;
    private $type;
    public function __construct($file,$type)
    {
        $this->file=$file;
        $this->type=$type;
    }
    public  function generate(){
        return $this->type->executePdf();
    }

}