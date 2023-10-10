<html>
<body>
<form method="POST" action="lowerupper.php">
enter string 1:
<input type="text" name="t1"><br>
enter string 2:
<input type="text" name="t2">
<input type="submit">
</form>
</body>
</html>

<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];

echo("<br> uppercase string:".strtoupper($s1));
echo("<br> lowercase string:".strtolower($s1));
echo("<br> uppercase string:".strtoupper($s2));
echo("<br> lowercase string:".strtolower($s2));

$k=strpos($s1,$s2);
if($k==NULL)
  echo("<br>substring not found...");
else
  echo("<br>substring found in starting pos=".$k);
?>



