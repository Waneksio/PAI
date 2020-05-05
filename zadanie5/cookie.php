<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
    $time = 0;
	if (isSet($_GET["czas"]))
	{
		$time = $_GET["czas"];
	}
	setcookie("ciastko", "1", time() + $time, "/");
	echo "Dodano ciasteczko";
?>
<form action="index.php">
  <table>
	<tr><td><input type="submit" value="Wróć"></td></tr>
  </table>
</form>
</body>
</html>
