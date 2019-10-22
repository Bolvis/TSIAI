 <?php
 $file=fopen("info.txt","w") or die("Cant open file :(((");
 $text = "";
 foreach($_POST as $item){$text= $text.$item.",";}
 fwrite($file,$text);
 fclose($file);
 echo '<pre>';
 echo "<h2>1.Standard</h2>";
 echo $_POST['name'];
 echo $_POST['surname'];

 echo "<h2>2.var_dump</h2>";
 var_dump($_GET);
 var_dump($_POST);

 echo "<h2>3.print_r</h2>";
 print_r($_POST);

 echo "<h2>4.foreach echo</h2>";
 foreach($_POST as $item) {echo "<p>$item</p>";}
 echo '</pre>';