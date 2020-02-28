<?php

$file = fopen('liczby.txt', 'r');

$lista = array();

//WYPISANIE TEKSTU DO LISTY
if ($file) {
    while (($buffer = fgets($file, 4096)) !== false) {
        array_push($lista, $buffer);
    }
    if (!feof($file)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($file);
}

//POSORTOWANIE LISTY I WYPISANIE
sort($lista, SORT_NATURAL | SORT_FLAG_CASE);
echo "</br>";

foreach ($lista as $key => $val) {
    echo "$key = $val</br>";
}

//WYPISANIE NAJWIĘKSZEJ I NAJMNIEJSZEJ LICZBY
echo "Najmniejsza liczba to: </br>";
echo $lista[0];
echo "</br> Największa liczba to: </br>";
$ilosc = count($lista) - 1;
echo $lista[$ilosc];
echo "</br>";

//ZAPIS	POSORTOWANEJ LISTY DO PLIKU
$plik2 = 'sort.txt';
$lista_string = implode("", $lista);
if (is_writable($plik2)) {
    if (!$handle = fopen($plik2, 'a')) {
        echo "Cannot open file ($plik2)";
        exit;
    }
    if (fwrite($handle, $lista_string) === FALSE) {
        echo "Cannot write to file ($plik2)";
        exit;
    }
    echo "Success, wrote ($lista_string) to file: $plik2";
    fclose($handle);
} else {
    echo "The file $plik2 is not writable";
}

$lista = array_map('floatval', $lista);
foreach ($lista as $key => $val) {
    echo "$key = $val</br>";
}

