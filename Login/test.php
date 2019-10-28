<?php
session_start();
if($_SESSION['auth']==true)
{
    echo "<a href='logout.php'>logout</a>";
}
