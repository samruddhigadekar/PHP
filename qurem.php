<html>
<body>
<form method="post" action="qurem.php">
Enter 1st no:
<input type="number" name="t1"><br>
Enter 2nd no:
<input type="number" name="t2"><br>
<input type="submit" value="submit"><br>
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a/$b;
$d=$a%$b;
echo("quotient=".$c);
echo("<br>reminder=".$d);
?>
