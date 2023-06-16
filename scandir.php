<?php
$dir ="/home/rgukt/Desktop/";
$a = scandir($dir);
$b = scandir($dir,1);
print_r($a);
echo "<br>";
print_r($b);
?>