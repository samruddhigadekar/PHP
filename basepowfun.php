<?php
function power($x,$y)
{
 $f=1;
 for($i=1;$i<=$y;$i++)
 {
  $f=$f*$x;
 }
 echo("<br>x raise to y=".$f);
}
power(2,5);
?>