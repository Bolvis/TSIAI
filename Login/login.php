<?php
session_start();
$_SESSION['auth']=false;
$password="admin1";
$login="admin";

if($_POST['login']==$login && $_POST['password']==$password)
{
        $_SESSION['auth']=true;
        echo "<a href='test.php'>click here</a>";
}

