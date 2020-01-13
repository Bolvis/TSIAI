<?php
session_start();
$_SESSION['auth']=false;
$password="admin1";
$login="admin";

if($_POST['login']==$login && $_POST['password']==$password)
{
        $_SESSION['auth']=true;
        echo "<a type='button' href='test.php'/>click here</a>";
}
/*if($_POST['savePassword']==true)
{
   //TODO insert saving user password
}*/

