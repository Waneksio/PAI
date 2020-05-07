 <?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
 <form action="form06_post.php">
 <input type="submit" value="Powrót">
 </form>
 <?php
 if ($_SESSION['succes'] <> 1) {
	header("Location: form06_post.php");
 }
 $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
 $result = $link->query("SELECT * FROM pracownicy");
 foreach ($result as $v) {
 echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
 }
 $result->free();
 $link->close();

?>
</body>
</html>