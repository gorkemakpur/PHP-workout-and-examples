<?
ob_start();
session_start();
?>
<html>
<head>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<META http-equiv="Content-Type" content="text/html; charset=windows-1254" />
<META http-equiv="Content-Type" content="text/css; charset=iso-8859-9" />
<META http-equiv="Content-Type" content="text/css; charset=windows-1254" />
<META http-equiv="content-language" content="TR" />
<META name="Abstract" content="�evrimi�i Test Portali" />
<META name="Author" content="" />
<META name="Copyright" content="T�m Haklari  a aittir" />
<META name="description" content="Ahi, Ahi Evran, Ahi Evran �niversitesi,Kirsehir,Kirsehir Meslek Y�kseokulu" />
<META name="keywords" content="Ahi, Ahi Evran, Ahi Evran �niversitesi,Kirsehir,Kirsehir Meslek Y�kseokulu" />
<META name="robots" content="index,follow" />
<META http-equiv="Pragma" Content="no-cache">
<META http-equiv="Cache-Control" Content="no-cache">
<title>�evrimi�i Test Portali</title>
<link rel="StyleSheet" href="studentsigninstyle.css" type="text/css" media="all" />
<script>
function kontrol(id)
	{
	nesne = document.getElementById(id);
	var metin = nesne.value.replace(/\D/g, function(yakala) { return "";});
	nesne.value=metin;
	}
</script>
<script language=JavaScript1.2>
<!--
function ogrencigirisi_onSubmit()
{
 if (document.ogrencigirisi.kadi.value == "")
   {
   alert ("Kullan�c� Ad�n�z alan� girilmemi�, l�tfen tekrar deneyiniz.");
   document.ogrencigirisi.kadi.focus();
   return false;
   }
 if (document.ogrencigirisi.sifre.value == "")
   {
   alert ("�ifreniz alan� girilmemi�, l�tfen tekrar deneyiniz.");
   document.ogrencigirisi.sifre.focus();
   return false;
   }
 if (document.ogrencigirisi.securitycod.value == "")
   {
   alert ("G�venlik alan�n� bo� b�rakt�n�z, l�tfen tekrar deneyiniz.");
   document.ogrencigirisi.securitycod.focus();
   return false;
   }
}
//-->
</script>
</head>
<body>
<?
session_start(); // oturumu baslatiyoruz
if(!isset($_SESSION['ogrkul'])){
?> 

<div align="center">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="t1">&nbsp;</td>
<td class="t2">��RENC� G�R���</td>
<td class="t3">&nbsp;</td>
</tr>
<tr>
<td class="tnull1"></td>
</tr>
</table>
</div>
<div align="center">
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="t7"></td>
	<td class="t8"><form name="ogrencigirisi" method="POST" action="login.php" onSubmit="return ogrencigirisi_onSubmit()">
	<div align="center">
	<table border="0" cellspacing="0" cellpadding="5">
	<tr>
	<td class="t13"> Kullan�c� Ad� </td>
	<td class="t14">:</td>
	<td class="t15"><input type="text" value="" class="t16" name="k_adi"  id="k_adi" maxlength="10" /></td>
	</tr>
	<tr>
	<td class="t13"> �ifre </td>
	<td class="t14">:</td>
	<td class="t15"><input type="password" value="" class="t16" name="k_sifre" id="k_sifre" maxlength="11"></td>
	</tr>
    <tr>
     <td class="t13">G�venlik Kodu</td><td class="t14">:</td><td class="t15"><img src="<?php echo "guvenlikresmi.php"; ?>">&nbsp;<input type="text" name="securitycod" maxlength="6" size="7" /></td>
     </tr>
	<tr>
	<td class="t13"></td>
	<td class="t14"></td>
	<td class="t15"><input type="image" src="../img/giris.gif" value="login" name="ogrencigirisi"></td>
	</tr>
	</table>
	</div>
	</form>
</td>
<td class="t9"></td>
</tr>
<tr>
<td class="t10"></td>
<td class="t11"></td>
<td class="t12"></td>
</tr>
<tr>
<td class="t4" colspan="3"><a href="#">Hesap Hizmetleri</a> | <a href="#">Yard�m</a></td>
</tr>
</table>
</div>
<?
exit();
} else {
echo "Ho�geldiniz ".$_SESSION['ogrkul'];
echo '��k�� i�in <a href="cikis.php">t�klay�n</a><br/>';
}
?>
</body>
</html>
