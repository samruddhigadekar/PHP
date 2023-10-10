<?php
$ecnt=0;
$ocnt=0;
for($i=1;$i<=1000;$i++)
{
 if($i%2==0)
  $ecnt++;
 else
  $ocnt++;
}
echo("even number count=".$ecnt);
echo("odd number count=".$ocnt);
?>