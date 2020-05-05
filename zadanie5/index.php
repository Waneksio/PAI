<?php
  session_start();
  echo "<h1 style=\"font-size: 22px\">Nasz (kochany) system</h1>";
  $_SESSION['zalogowany'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<form action="logowanie.php">
  <fieldset>
  <legend> Logowanie </legend>
  <table>
	<tr><td>Login</td><td><input type="text" name="f_login"></td></tr>
	<tr><td>Hasło</td><td><input type="text" name="f_haslo"></td></tr>
	<tr><td><input type="submit" value="Zaloguj"></td></tr>
  </table>
  </fieldset>
</form>
<form action="cookie.php">
  <fieldset>
  <legend> Tworzenie ciasteczek </legend>
  <table>
	<tr><td>Czas</td><td><input type="number" name="czas"></td></tr>
	<tr><td><input type="submit" value="Utworz ciasteczko"></td></tr>
  </table>
  </fieldset>
</form>
<?php
	if (isSet($_COOKIE['ciastko']))
	{
		echo "Wartość cookie: ";
		echo $_COOKIE['ciastko'];
	}
?>
</body>
</html>
