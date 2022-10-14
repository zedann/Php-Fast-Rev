<?php

class oldExport{
    public $data;
    public $type;
    public function __construct($data,$type)
    {
        $this->data = $data;
        $this->type = $type;
    }
    public function generate(){
        if($this->type == "pdf"){
           return $this->pdf();
        }else if($this->type == "word"){
            return $this->word();
        }
        else if($this->type == "excel"){
            return $this->excel();
        }
    }
    public function pdf(){
        echo "pdf";
    }
    public function word(){
        echo "word";
    }
    public function excel(){
        echo "excel";
    }
}