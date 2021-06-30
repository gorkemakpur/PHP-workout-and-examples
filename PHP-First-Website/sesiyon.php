<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php 
	session_start();
	echo $_SESSION["id"];
	?>
	<a href="login1.php">çıkış yapmak için tıklayınız</a>		
	</body>
</html>