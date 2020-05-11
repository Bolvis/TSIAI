<?php
include 'Trojkat.class.php';
$t1 = new Trojkat();
$t2 = new Trojkat();

echo "Trojkat 1: </br>";
echo $t1->poleTrojkata();
echo $t1->getInfo();
echo '<p>';
echo "Trojkat 2: </br>";
echo $t2->poleTrojkata();
echo $t2->getInfo();