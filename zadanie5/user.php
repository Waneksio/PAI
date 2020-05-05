<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
  require_once("funkcje.php");
  $currentDir = getcwd();
  if ($_SESSION['zalogowany'] <> 1) {
	header("Location: index.php");
  }
  $fileName = $_FILES['myFile']['name'];
  $fileSize = $_FILES['myFile']['size'];
  $fileTmpName = $_FILES['myFile']['tmp_name'];
  $fileType = $_FILES['myFile']['type'];
  if($fileName != "" and
	($fileType == 'image/png' or $fileType == 'image/jpeg'
	or $fileType == 'image/JPEG' or $fileType == 'image/PNG'
  ))
  {
	  $uploadPath = $currentDir . $fileName;
	  if (move_uploaded_file($fileTmpName, $uploadPath))
		  echo "Zdjęcie zostało załadowane na serwer FTP";
  }
?>
<img src="../phpdis.png" alt="" width="100" height="100">
<form action='user.php' method='POST' enctype='multipart/form-data'>
  <table>
	<tr><td><input name="myFile" type="file"></td></tr>
	<tr><td><input type="submit" value="Wyślij"></td></tr>
  </table
<form action="index.php">
  <table>
	<tr><td><input type="submit" value="Wyloguj"></td></tr>
  </table
</body>
</html>
