<html>
<body>
<form method="post" action="">
enter year:
<input type="post" name="t1"><br>
<input type="submit">
</form>
</body>
</html>
<?php 
$y=$_POST["t1"];
 if($y%4==0)
  echo("year is leap");
 else
  echo("not leap year");
?>