<html>
<body>
<form method="post" action="">
enter number 1:
<input type="number" name="t1"><br>
enter number2:
<input type="number" name="t2"><br>
<input type="submit" value="swap">
</form>
</body>
</html>
<?php
 $a=$_POST["t1"];
 $b=$_POST["t2"];
 $a=$a+$b;
 $b=$a-$b;
 $a=$a-$b;
 echo("swap value a=".$a);
 echo("<br>swap value b=".$b);
?>
 