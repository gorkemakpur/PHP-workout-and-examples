<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
$db=@new PDO("mysql:host=localhost;dbname=deneme","root","");

	$sonuc=$db->query("select * from musteri");	
	/*
	while ($row=$sonuc->fetch()){
		echo $row[1]."\t".$row['tel']."<br>"; 
		}
		*/
	foreach($sonuc as $deger){
		echo $deger[1]."\t".$deger['tel']."<br>"; 
		}
?>
</body>
</html>