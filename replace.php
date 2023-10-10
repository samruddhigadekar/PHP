<horm>
<body>
<form method="post" action="replace.php">
enter string 1:
<input type="text" name="t1"><br>
Enter string 2(find):
<input type="text" name="t2"><br>
enter string 3(replace):
<input type="text" name="t3"><br>
<input type="submit"><br>
</form>
</body>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];

$s=str_replace($s2,$s3,$s1);
echo("replace string=".$s);
$s=strrev($s);
echo("<br> reverse string=".$s);
?>