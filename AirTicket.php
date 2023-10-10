<html>
<body>
<h1 align="center">AIR TICKET RESERVATION FROM</h1>
<form method="post" action="AirTicket.php">
NAME:
<input type="text" name="t1"><br>
ADDRESS:
<textarea name="t2"></textarea><br>
CONCAT NUMBER:
<input type="number" name="t3"><br>
SOURCE:
<select name="s1">
<option value="pune">pune</option>
<option value="shirdi">shirdi</option>
<option value="mumbai">mumbai</option>
</select><br>
DESTINATION:
<select name="s2">
<option value="pune">pune</option>
<option value="mumbai">mumbai</option>
<option value="shirdi">shirdi</option>
</select><br>
DATE OF JOURNEY:
<input type="date" name="t4"><br>
GENDER:
<input type="radio" name="r1" value="Male">male
<input type="radio" name="r1" value="Female">female<br>
NUMBER OF PERSON:
<input type="number" name="t5"><br>
PRICE PER TICKET:
<input type="number" name="t6"><br>
<input type="SUBMIT" value="submit">
<input type="RESET">
</form>
</body>
</html>
<?php
$name=$_POST["t1"];
$add=$_POST["t2"];
$ph=$_POST["t3"];
$s=$_POST["s1"];
$d=$_POST["s2"];
$dt=$_POST["t4"];
$g=$_POST["r1"];
$p=$_POST["t5"];
$ticket=$_POST["t6"];
$tot=$p*$ticket;
echo("<br>name=".$name);
echo("<br>Address=".$add);
echo("<br>contact number=".$ph);
echo("<br>sources=".$s);
echo("<br>destionation=".$d);
echo("<br>date=".$dt);
echo("<br>gender=".$g);
echo("<br>number of person=".$p);
echo("<br>price per ticket=".$ticket);
echo("<br>total amount=".$tot);
?>
