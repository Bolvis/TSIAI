<?php
include 'Osoba.class.php';
$jane = new Osoba('Jane', 'Doe', 'f', '2000-02-12', 555888777);

echo $jane -> getPhoneNumber();
echo $jane -> getInfo();

$john = new Osoba('John', 'Doe','m', '1999-12-11', 13456789);
echo $john -> getInfo();
$john -> setSurname('DoeNobody');
echo $john -> getInfo();