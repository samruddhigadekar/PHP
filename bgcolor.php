<htm>
<body>
<form method="post" action="color.php">
enter sunday to monday:
<input type="text" name="t1"><br>
<input type="submit" value="ok">
<input type="reset" value="clear">
</form>
</body>
</html>
<?php
$d=$_POST["t1"];
 switch($d)
 {
  case "monday": echo("<body bgcolor='white'>");break;
  case "tuesday": echo("<body bgcolor='green'>");break;
  case "wedensday": echo("<body bgcolor='orange'>");break;
  case "thursday": echo("<body bgcolor='pink'>");break;
  case "friday": echo("<body bgcolor='purple'>");break;
  case "saturday": echo("<body bgcolor='blue'>");break;
  case "sunday": echo("<body bgcolor='red'>");break;
  default: echo("<h1>Invalid day.....");
 }

?>