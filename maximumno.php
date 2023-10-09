<html>
<body>
<form method="post" action="maximum.php">
enter no1:
<input type="number" name="t1"><br>
enter no 2:
<input type="number" name="t2"><br>
<input type="submit" value="MAX">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$a>$b? $m=$a:$m=$b;
echo("maximum no=".$m);
?>
