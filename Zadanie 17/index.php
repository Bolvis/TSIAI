<?php

function f1($dzielna){
    return ($dzielna%7==0);
}

function f2($dzielna, $dzielnik = 1){
    return $dzielna/$dzielnik;
}

function f3($string){
    return strlen($string) * 2;
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
    echo "<tbody>";
    for ($x = 1; $x <= $size; $x++){
        echo "<tr>";
        for($y = 1; $y <= $size; $y++){
            echo "<td>W".$x." x K".$y."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
}

function f7($sizeX, $sizeY){
    echo "<tbody>";
    for ($x = 1; $x <= $sizeX; $x++){
        echo "<tr>";
        for($y = 1; $y <= $sizeY; $y++){
            echo "<td>".$x." x ".$y."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
}