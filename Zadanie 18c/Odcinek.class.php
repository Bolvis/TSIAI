<?php
class Odcinek
{
    private $x1, $x2, $y1, $y2;

    public function __construct($x1, $x2, $y1, $y2)
    {
        if ($x1 != null && $x1 >= -100 && $x1 <= 100) $this->x1 = intval($x1);
        else $this->x1 = rand(-100, 100);
        if ($x2 != null && $x2 >= -100 && $x2 <= 100 )$this->x2 = intval($x2);
        else $this->x2 = rand(-100, 100);
        if ($y1 != null && $y1 >= -100 && $y1 <= 100) $this->y1 = intval($y1);
        else $this->y1 = rand(-100, 100);
        if ($y2 != null && $y2 >= -100 && $y2 <= 100) $this->y2 = intval($y2);
        else $this->y2 = rand(-100, 100);
    }

    public function liczDlugosc(){
        echo "x1: ".$this->x1.", x2: ".$this->x2.
            ", y1: ".$this->y1.", y2: ".$this->y2.'</br>';
        $x = ($this->x2 - $this->x1)**2;
        $y = ($this->y2 - $this->y1)**2;
        $length = $x + $y;
        //echo $x.", ".$y.", ".$length.'</br>';
        return sqrt($length);
    }
}