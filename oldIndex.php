<?php

include('INC\config.php');
include ('INC\mod_menu.php');

var_dump($_GET);

$file='INC\inc_'.$_GET['id'].'.php';
if(file_exists($file))
{
    include ($file);
}
else
    {
        header('Error 404 Page not found');
        echo '<h1>Siema nie dziala</h1>';
    }