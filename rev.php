<html>
<body>
<form method="post" action="rev.php">
Enter number:
<input type="number" name="t1"><br>
<input type="submit" value="reverse">
<input type="reset" value="clear">
</form>
</body>
</html>
<?php
$n=$_POST["t1"];
$r=0;
while((int)$n>0)
{
$d=$n%10;
$r=$r*10+$d;
$n=$n/10;
}
echo("Reverse number=".$r);
?>