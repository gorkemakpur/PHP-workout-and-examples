  <?php
   
    for($i=0; $i<9; $i++)
    {
        $sayi[$i]=rand(1,100);
      echo $sayi[$i]."  ";
      }
   echo "-------------------------------------------";   
   for($a=0; $a<9; $a++)
   {
       for($b=$a+1; $b<9; $b++)
       {
           if($sayi[$a] > $sayi[$b])
               {
                 $temp=$sayi[$a];
                 $sayi[$a]=$sayi[$b];
                 $sayi[$b]=$temp;
               }
          
       }
   }
 for($i=0; $i<9; $i++)
    {
      echo "<br>".$sayi[$i]."  ";
      }
      ?>