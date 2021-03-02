 <form method="post" action="">
     Doğduğunuz Saat:<input type="text" name="dogumSaati"></input><br>
     Doğduğunuz Dakika:<input type="text" name="dogumDakikasi"></input><br>
     Doğduğunuz Saniye:<input type="text" name="dogumSaniyesi"></input><br>
     Doğduğunuz Ay:<input type="text" name="dogumAy"></input><br>
     Doğduğunuz Gün:<input type="text" name="dogumGun"></input><br>
     Doğum Yılınız:<input type="text" name="dogumYili"></input>
    <input type="submit" ></input>
      </form>
<?php
$saat=$_POST['dogumSaati'];
$dakika=$_POST['dogumDakikasi'];
$saniye=$_POST['dogumSaniyesi'];
$ay=$_POST['dogumAy'];
$gun=$_POST['dogumGun'];
$yil=$_POST['dogumYili'];

$simdi=time();
$zaman=mktime($saat, $dakika, $saniye, $ay, $gun, $yil);
$fark=abs($simdi-$zaman);
$gun=floor($fark/(24*60*60));
$saat=floor(($fark-$gun*24*60*60)/(60*60));
$dakika=floor(($fark-($gun*24*60*60+$saat*60*60))/60);
$saniye=$fark-($gun*24*60*60+$saat*60*60+$dakika*60);

echo "$gun gün $saat saat $dakika dakika $saniye saniye vardır.";
?>