<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
	<?php
	$db= @new mysqli('127.0.0.1','root','','taki');
	$sql=$db->prepare("select * from urun");
		$sql->execute();
		$result=$sql->get_result();
		echo '<table border=1 ; float:left;>';
		while($row=$result->fetch_array()){	
			echo '<tr><td>'.$row[1].'</td><td>'.$row[4].'</td><td>'.'</td>
				<td><a href="duzenle2.php?id='.$row[0].'">[Düzenle]</a></td>
				<td><a href="silurun.php?id='.$row[0].'" onclick="return confirm(\'Silinsin mi?\')">[Sil]</a></td></tr>';				
			}
			$sql->close();
		echo '</table>';
		
	


$db->close();
?>
</body>
</html>