<?php
include 'Odcinek.class.php';
$o1 = new Odcinek(3,7,-5,-10);
$o2 = new Odcinek(128,30,-150,39);

$o1Length = $o1->liczDlugosc();
echo $o1Length;
echo '<p>';
$o2Length = $o2->liczDlugosc();
echo $o2Length;
echo '<p>';
if ($o1Length > $o2Length) echo "Odcinek 1 jest dłuższy.";
else echo "Odcinek 2 jest dłuższy.";
