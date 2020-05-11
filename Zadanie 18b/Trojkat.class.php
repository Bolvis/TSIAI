<?php
class Trojkat{
    public $h, $a;
    public function __construct(){
        $this->h = rand(1,100);
        $this->a = rand(1,100);
    }

    public function poleTrojkata(){
        return "Pole tego trojkata wynosi: ".(($this->h * $this->a)/2).'</br>';
    }

    public function getInfo(){
        echo "Wysokość wynosi: ".$this->h.'</br>';
        echo "Długość podstawy wynosi: ".$this->a.'</br>';
        echo "Pole wynosi: ".(($this->h * $this->a)/2).'</br>';
    }
}

