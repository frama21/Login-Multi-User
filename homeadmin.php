<?php
session_start();

//cek Apakah USER sudah login
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
}

//cek level admin
if ($_SESSION['level'] != "admin") {
	die("Anda Bukan Admin");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HALAMAN ADMIN</title>
</head>
<body>

<?php
echo $_SESSION['userid'];
?>

<a href="halaman1.php">HALAMAN 1 (khusus admin)</a><br>
<a href="halaman2.php">HALAMAN 2 (Umum)</a><br>
<a href="log.php?op=out">LOG OUT</a>
	
</body>
</html>