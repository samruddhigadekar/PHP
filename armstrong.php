<?php
 for($n=1;$n<500;$n++)
 {  
   $n1=$n;
   $s=0;
   while((int)$n1>0)
   {
    $d=$n1%10;
    $s=$s+($d*$d*$d);
    $n1=$n1/10;
   }
   if($s==$n)  
    echo("<br>armstrong number=".$n);
  }
?>