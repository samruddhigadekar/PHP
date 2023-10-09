<html>
<body>
<form method="post" action="area.php">
enter radius:
<input type="number" name="t1"><br>
enter side:
<input type="number" name="t2"><br>
enter heigth:
<input type="number" name="t3"><br>
<input type="submit" value="area">
</form>
</body>
</html>
<?php
$r=$_POST["t1"];
$s=$_POST["t2"];
$h=$_POST["t3"];
$c=3.14*$r*$r;
$s1=$s*$s;
$r=$s*$h;
echo("area circle=".$c);
echo("square=".$s1);
echo("rectangle=".$r);
?>