<html>
<body>
<form method="post" action="survol.php">
enter length:
<input type="number" name="t1"><br>
enter breath:
<input type="number" name="t2"><br>
enter heigth:
<input type="number" name="t3"><br>
<input type="submit" value="area_volume">
</form>
</body>
</html>
<?php
$l=$_POST["t1"];
$b=$_POST["t2"];
$h=$_POST["t3"];
$s=2*$l*$b+$l*$h+$b*$h;
$v=$l*$b*$h;
echo("surface area=".$s);
echo("volume area=".$v);
?>