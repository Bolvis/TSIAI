<pre>
<?php
error_reporting(0);
$file = 'Wykaz_szkół_i_placówek_wg_stanu_na_30.IX._2018_w.5.csv';
$array = [];

if (($item = fopen("{$file}", "r")) !== FALSE)
{
    while (($data = fgetcsv($item, 10000, ",")) !== FALSE)
    {
        $array[] = $data;
    }
    fclose($item);
}

for($i = 0; $i < count($array); $i++){
    $temp =  $array[$i];
    if ($temp[2] == $_GET['wojewodztwo'] && $temp[3] == $_GET['powiat'] && $temp[9] == $_GET['miasto'] && $temp[11] == $_GET['typ']){
        echo $temp[9].' | '.$temp[14];
        echo "<hr>";
    }

}