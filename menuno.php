<html>
<body>
<form method="POST" action="menuno.php">
Enter number 1:
<input type="number" name="t1"><br>
enter number 2:
<input type="number" name="t2"><br>
enter choice:
<br>1:find mod of two number
<br>2:find the power of first number rasied to the second 
<br>3:find the sum of first n number
<br>4:find the factorial of second number<br>
<input type="text" name="t3"><br>
<input type="submit"><br>
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["t3"];
switch($ch)
{
  case 1:mod($a,$b);
         break;
  case 2:power($a,$b);
         break;
  case 3:sum($a,$b);
         break;
  case 4:fact($a,$b);
         break;
}
function mod($a,$b)
{
 $c=$a%$b;
 echo("<br>mod of number=".$c);
}
function power($a,$b)
{
 $ans=1;
 for($i=1;$i<=$b;$i++)
 {
   $ans=$ans*$a;
 }
 echo("power=".$ans);
}
function sum($a)
{
 $s=0;
 for($i=1;$i<=$a;$i++)
 $s=$s+$i;
 echo("sum=".$s);
}
function fact($n)
{
 $f=1;
 for($i=1;$i<=$n;$i++)
 $f=$f*$i;
 echo("factorial=".$f);
}
?>
