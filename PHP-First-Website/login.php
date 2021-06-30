<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aziz Görkem Akpur-182511029</title>
<link type="text/css" rel="stylesheet" href="login.css">
	</head>

<body style="background-image:url('outer-space-4r-1920x1080.jpg');"><div class=kayit>
	<form action="login.php" method="post">
		<table>
<tr><td>kullanıcı adı:</td><td><input type="text" name="kadi"</td></tr>	
		<tr><td>şifre:</td><td><input type="text" name="sifre"</td></tr>	
	<tr><td>mail:</td><td><input type="text" name="mail"</td></tr>	
			<tr><td>adı soyadı:</td><td><input type="text" name="as"</td></tr>	
			<tr><td>doğum tarihi:</td><td><input type="date" name="dt"</td></tr>	
			<tr><td>tc:</td><td><input type="text" name="tc"</td></tr>	
			<tr><td>telefon:</td><td><input type="text" name="tlf"</td></tr>	
			
		<tr><td> </td><td><input type="submit" id="button" value="kayıt ol"</td></tr>
			
			
		</table>
<a href="login1.php">Zaten üyemiz misiniz?</a>
		
	
	
	</form>
	
	<?php
	if($_POST){
	$kadi=$_POST['kadi'];
	$sifre=$_POST['sifre'];
	$mail=$_POST['mail'];
	$as=$_POST['as'];
	$tc=$_POST['tc'];
	$dt=$_POST['dt'];
	$tlf=$_POST['tlf'];
	if($kadi=="" ||$sifre=="" || $mail=="" ||$as=="" ||$tc==""||$dt=="" || $tlf=="") {echo "lütfen boş alan bırakmayınız";}
		else
		{
		$db=@new mysqli("127.0.0.1","root","","uyegiris");	
	$ekle="INSERT INTO `uyeler`(`id`, `kadi`, `sifre`, `mail`, `adı soyadı`, `doğum tarihi`, `tc`, `telefon`) VALUES ('','$kadi','$sifre','$mail','$as','$tc','$dt','$tlf')";
			if($db->query($ekle)){
				echo "kayıt başarılı";
			header("refresh:2; url=login.php");
		}}
	}
	?>
	</div>
</body>
</html>