<html>
<body>
<form method="POST" action="funadd.php">
enter number1:
<input type="number" name="t1"><br>
enter number2:
<input type="number" name="t2"><br>
<input type="radio" name="r1" value="aa">Addition<br>
<input type="radio" name="r1" value="bb">Subtraction<br>
<input type="radio" name="r1" value="cc">Multiplication<br>
<input type="radio" name="r1" value="dd">Division<br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];
if($ch=="aa")
  add($a,$b);
if($ch=="bb")
  sub($a,$b);
if($ch=="cc")
  mul($a,$b);
if($ch=="dd")
  div($a,$b);
function add($a,$b)
{
 $c=$a+$b;
 echo("<br>result=".$c);
}
function sub($a,$b)
{
 $c=$a-$b;
 echo("<br>result=".$c);
}
function mul($a,$b)
{
 $c=$a*$b;
 echo("<br>result=".$c);
}
function div($a,$b)
{
 $c=$a/$b;
 echo("<br>result=".$c);
}
?>