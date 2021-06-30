<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aziz Görkem Akpur-182511029</title>
<link type="text/css" rel="stylesheet" href="login.css">
	</head>

<body style="background-image:url('outer-space-4r-1920x1080.jpg');"><div class=kayit>
	<form action="login1.php" method="post">
		
		<table>
<tr><td>kullanıcı adı:</td><td><input type="text" name="kadi"</td></tr>	
		<tr><td>şifre:</td><td><input type="text" name="sifre"</td></tr>	
	
		<tr><td> </td><td><input type="submit" name="giris" value="giriş yap"</td></tr>
			
		</table>
		<div>Güvenlik kodu:<img src="guvenlikresmi.php"><input type="text" name="kod" maxlength="6" size="7"></div>
<a href="login.php">ÜYE DEĞİL MİSİNİZ?</a>
		
	
	
	</form>
	<?php
	session_start();
	$taban=new MySQLi("127.0.0.1","root","","uyegiris");
	if($taban->connect_error){die("bağlantı hatası");}
	if(isset($_POST['giris'])){
		$kadi=$_POST['kadi'];
			$sifre=$_POST['sifre'];
		$giris="select * from uyeler where kadi='$kadi' and sifre='$sifre'";
		$getir=$taban->query($giris);
		if($getir->num_rows>0){
		while($row=$getir->fetch_assoc()){
			
			$_SESSION["id"]=$row["id"];
			echo $_SESSION["id"];
			header("location:sesiyon.php");
		}		
		}
	}
	?>
	<?php

	ob_start();
 
if(!empty($_POST['kadi']) && !empty($_POST['sifre'])){
	
	if($_POST["kod"]==$_SESSION["guv"]){
		
		
	if($_POST['kadi']=='admin@admin.com' && $_POST['sifre']=='123'){
		
		
		
	$db=@new mysqli("127.0.0.1","root","","taki");
	$kayit = mysqli_prepare($db,'SELECT * FROM admin WHERE email=? AND sifresi=?');
	$kayit->bind_param('ss',$_POST['kadi'],$_POST['sifre']);
    $kayit->execute();
	$sonuc = $kayit->get_result();

	if($sonuc->num_rows) {
 
		$sifre=md5($_POST['sifre']) . ":" .md5(md5($_POST['sifre']) . $key);
		$kadi= $_POST['kadi'] . ":" . md5($_POST['kadi'] . $key);
		
		if($_POST['hatirla']){
			
			setcookie("musteri",$sifre . ':' . $kadi, strtotime('+30 days'));
		}
		
		$_SESSION['musteri'] = serialize($sonuc->fetch_array());
		
		header('Location: amdingiris.php');}}
	
	else{
		if($_POST['kadi']=="" or $_POST['sifre']==""){
			
		echo '<center><h4>E-postayı yada Şifreyi Boş Bırakmayınız</center></h4>';
	}
		else {
		echo "<center><h4>Eposta veya Şifre Hatalı!</center></h4><br><a href='giris.php'><center><h4>Geri Dön</center></h4></a>";
	}
		}
	
}
	else echo "<center><h4>Güvenlik Resmini Doğru Giriniz</h4></center>";
}

	
?>
	
	</div>
</body>
</html>















