<?php
trait car {
    public $color;
    public $size;
    public function move(){
        echo "move";
    }
}
trait soft{
    public function os(){
        echo "os";
    }
}
class bmw {
    use car {
        move as run;
    }
}
$bmw = new bmw;
$bmw->run();