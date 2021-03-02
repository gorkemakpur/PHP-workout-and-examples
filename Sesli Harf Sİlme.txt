<?php

$metin ="Merhaba";
$sesli = array('a','e','ı','i','o','ö','u','ü','A','E','I','İ','O','Ö','Ü','U');
$cumle_sayisi = strlen($metin); 
$yenimetin = array();

  for($i = 0; $i < $cumle_sayisi; $i++){
      $karakter = mb_substr($metin, $i, 1, 'UTF-8');
      if(in_array($karakter, $sesli)){
          $yenimetin[$i] = ""; 
       }else{
            $yenimetin[$i] = $karakter;
        }
    }


   foreach($yenimetin as $yazdir)
    echo $yazdir;
   ?>