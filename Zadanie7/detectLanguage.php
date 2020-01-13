<pre>
<?php
include 'contentLanguage.php';
if(isset ($_SERVER['HTTP_ACCEPT_LANGUAGE']))
{
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$tab = explode (',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
print_r($tab);


foreach($contentLanguage as $item)
{
echo '<br><a href="">'.$item.'</a> ';
}

echo '<br>Będzie w języku...';

foreach ($contentLanguage as $key1=>$value1)
{
foreach($tab as $key2=>$value2)
{
   $tab2=explode('-',$value2);

   foreach($tab2 as $item)
   {
       $tab3=explode(';',$item);

       if(strcmp($value1,$item)==0){$jezyk=$value2;}
   }

}
}

}else $jezyk="en";