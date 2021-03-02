<html>
<head>
</head>
<body>
    <form method="post" action="">
       Satır Sayısı Giriniz <input type="text" name="satir">
            Sütun Sayısı Giriniz <input type="text" name="sutun">
                <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                    <input type="color" id="favcolor2" name="favcolor2" value="#ff0000">
                    <input type="submit">
        
        
    </form>  
  
<?php
$satir=$_POST['satir'];
        $sutun=$_POST['sutun'];
        $color=$_POST['favcolor'];
        $color2=$_POST['favcolor2'];
  function tabloCiz($satir,$sutun,$color,$color2)
  {
  echo "<table border=1>";
  for($i=1;$i<=$satir;$i++)
  {
       echo "<tr>";
     if($i%2==0){
      for($x=0;$x<$sutun;$x++)
      {
          if($x%2==0)
              {echo "<td bgcolor=$color> 1111111111111111";
               echo "</td>";
               
              }
               else{
                   echo "<td bgcolor=$color2> 1111111111111111";
               echo "</td>";
               }
       
     }
     
               }
     else{ 
         for($x=0;$x<$sutun;$x++)
      {
            for($x=0;$x<$sutun;$x++)
      {
          if($x%2==0)
              {echo "<td bgcolor=$color2> 1111111111111111";
               echo "</td>";
               
              }
               else{
                   echo "<td bgcolor=$color> 1111111111111111";
               echo "</td>";
               }
       
     }
          
     }}
         
     
    
      echo "</tr>";
  }
  echo "</table>";
  }

echo tabloCiz($satir, $sutun, $color,$color2);

?>

</body>
</html> 