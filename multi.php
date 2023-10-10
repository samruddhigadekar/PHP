<html>
<body>
<form method="post" action="multi.php">
enter number:
<input type="number" name="t1"><br>
<input type="submit"><br>
</form>
</body>
</html>
<?php
$n=$_POST["t1"];
for($i=1;$i<=10;$i++)

echo("<br>".$i*$n);
?>