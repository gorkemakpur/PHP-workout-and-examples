<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
$db=@new PDO("mysql:host=localhost;dbname=deneme","root","");
	if ($sql=$db->prepare("insert into musteri (ad,tel) values (?,?)")){
		$ad="ahmed";
		$tel=789;
		$sql->bindParam(1,$ad,PDO::PARAM_STR);
		$sql->bindParam(2,$tel,PDO::PARAM_INT);
		$sql->execute();
		echo $sql->rowCount()." kayıt eklendi<br>";
		} 
		else echo "sorguda hata".$db->error;
?>
</body>
</html>