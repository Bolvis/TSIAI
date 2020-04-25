<?php

function f1($dzielna){
    return ($dzielna%7==0);
}

function f2($dzielna, $dzielnik = 1){
    return $dzielna/$dzielnik;
}

function f3($string){
    $string = $string.$string;
    return $string;
}

function f4($num){
    $container = 0;
    foreach ($num as $key => $item){
        $container = $container + $item;
    }
    return $container;
}

function f5($tekst){
    $counter = 0;
    foreach ($tekst as $key => $item){
        if($item == " ")$counter = $counter + 1;
    }
    return $counter;
}

function f6($size){

}

function f7($sizeX, $sizeY){
    
}