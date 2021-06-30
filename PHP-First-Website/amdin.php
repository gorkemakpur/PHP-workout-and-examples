<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin.peheaşpe</title>
</head>
	<?php
$db=@new mysqli("127.0.0.1","root","","taki");
if (isset($_POST['save'])){
	if ($sql=$db->prepare("update urun set urun_adi=?,urun_stok=? , fiyat=? where id=?")){
		$urunadi=$_POST['urun_adi'];
		$stok=$_POST['urun_stok'];
		$fiyat=$_POST['fiyat'];
		$id=$_POST['id'];
		$sql->bind_param("siii",$urun_adi,$urun_stok,$fiyat,$id);
		$sql->execute();
		echo $sql->affected_rows." kayıt değiştirildi<br>";
		header('Location: amdin.php');
		} 
		else echo "sorguda hata".$db->error;
}
	
	 else if (isset($_GET['id'])){
	$sql=$db->prepare('select * from urun where id=?');
	$sql->bind_param("i",$_GET['id']);
	$sql->execute();
	$result=$sql->get_result();
	echo '<b>'.$result->num_rows.' '.'kayıt bulundu</b><br>';
		 $row= $result->fetch_array();
	echo '<form action="" method="post">
<input type="text" value='.$row['urun_adi'].' name="urun_adi"><br>
<input type="text" value='.$row['urun_stok'].' name="urun_stok"><br>
<input type="text" value='.$row['fiyat'].' name="fiyat"><br>
<input type="hidden" value="'.$row['id'].'" name="id">
<input type="submit" value="Kaydet" name="save">
</form>';
	}

	
$db->close();?>	

<body>
</body>
</html>