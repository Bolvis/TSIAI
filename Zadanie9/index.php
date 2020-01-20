<?php
$current=date_create('2020-01-13 13:45');
$end=date_create('2020-01-13 14:05');

$diff= date_diff($current,$end);

echo "Zadanie 1</br></br>";
echo $diff->format('%i Minutes');

echo "</br></br>Zadanie 2</br></br>";

$current=date_create('2020-01-13 13:45');
$end=date_create('2020-01-17 13:10');

$diff=date_diff($current,$end);

$days= $diff->format('%a');
$hours = $diff->format('%h');
$minutes = $diff->format('%i');
$minutes += ($days*24*60)+($hours*60);
echo $minutes." Minutes";


echo "</br></br>Zadanie 3</br></br>";

$current=date_create('2020-01-09');
$end=date_create('2020-06-19');

$diff=date_diff($current,$end);

echo $diff->format('%a Days');

echo "</br></br>Zadanie 4</br></br>";

$current=date_create('2020-01-13');
$end=date_create('2020-06-26');

$diff=date_diff($current,$end);

echo $diff->format('%a Days');

echo "</br></br>Zadanie 5</br></br>";

$current=date_create('15-04-1999');
$end=date_create('now');

$diff=date_diff($current,$end);

echo $diff->format('%a Days');

echo "</br></br>Zadanie 6</br></br>";

$current=date_create('now');


$diff=date_diff($current,$end);
$next= time() +(90*24*60*60);
echo "Wygaśnie: ".date('Y-m-d H:i',$next);