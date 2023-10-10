<?php
function maximum($a,$b,$c)
{
 if($a>$b && $a>$c)
  return $a;
 else if($b>$a && $b>$c)
  return $b;
 else
  return $c;
}
echo("<br> max no=".maximum(11,22,33));
?> 
 