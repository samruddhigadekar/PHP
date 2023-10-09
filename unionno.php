<?php
$a=array(10,20,30,40);
$b=array(15,10,25,35,45);
$c=array_merge($a,$b);
$c=array_unique($c);
print_r($c);
?>