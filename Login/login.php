<pre>
<?php
session_start();
echo "Session id:" . session_id();
$_SESSION['class']='3b';
var_dump($_SESSION);