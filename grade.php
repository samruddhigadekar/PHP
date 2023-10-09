<html>
<body>
<form method="post" action="grade.php">
Enter Percentage:
<input type="number" name="t1"><br>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php 
 $p=$_POST["t1"];
 if($p<40)
   echo("Grade:FAIL");
 else if($p>=40 && $p<=50)
   echo("Grade:PASS CLASS");
 else if($p>=50 && $p<=60)
   echo("Grade:HIGHER CLASS");
 else if($p>=60 && $p<=70)
   echo("Grade:FIRST CLASS");
 else
   echo("Grade:FIIRST CLASS WITH DISTINCTION");
?>