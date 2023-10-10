<?php
function swap($a,$b)
{
  $a=$a+$b;
  $b=$a-$b;
  $a=$a-$b;
echo("<br> swap value of a=".$a);
echo("<br> swap value of b=".$b);
}
$a=10;
$b=20;
echo("<br> before swap a=".$a);
echo("<br> before swap b=".$b);
swap($a,$b);
echo("<br> after swap a=".$a);
echo("<br> after swap b=".$b);
?>