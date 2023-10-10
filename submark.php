<html>
<body>
<form method="post" action="submark.php">
ENTER DATA STRUCTURE MARKS:
<input type="number" name="t1"><br>
ENTER DATA MARKETING MARKS:
<input type="number" name="t2"><br>
ENTER PHP MARKS:
<input type="number" name="t3"><br>
ENTER SOFTWARE ENGINEERING MARKS:
<input type="number"  name="t4"><br>
ENTER BIG DATA:
<input type="number" name="t5"><br>
<input type="submit" value="total">
</form>
</body>
</html>
<?php
$m1=$_POST["t1"];
$m2=$_POST["t2"];
$m3=$_POST["t3"];
$m4=$_POST["t4"];
$m5=$_POST["t5"];
$t=$m1+$m2+$m3+$m4+$m5;
$p=$t/5;
echo("<br>total=".$t);
echo("<br>percentage=".$p);
?>
