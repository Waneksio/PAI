<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
include 'funkcje.php';

$_SESSION['zalogowany'] = 0;
if (isSet($_GET["f_login"])) {
	if ($_GET["f_login"] == $osoba1->login) {
		if (isSet($_GET["f_haslo"])) {
			if ($_GET["f_haslo"] == $osoba1->haslo) {
				$_SESSION['zalogowany'] = 1;
				$_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
				header("Location: user.php");
			}
			else {
				echo 'bledne hasło';
			}
		}
	}
	else if ($_GET["f_login"] == $osoba2->login) {
		if (isSet($_GET["f_haslo"])) {
			if ($_GET["f_haslo"] == $osoba2->haslo) {
				$_SESSION['zalogowany'] = 1;
				$_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
				header("Location: user.php");
			}
			else {
				echo 'bledne hasło';
			}
		}
	}
	else {
		echo 'Nie ma takiego użytkownika ';
	}
}
?>
<form action="index.php">
  <table>
	<tr><td><input type="submit" value="Wróć"></td></tr>
  </table
</body>
</html>