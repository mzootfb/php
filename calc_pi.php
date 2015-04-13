<?php
echo "Enter the amount of decimals you would like from pi:";
echo '<form method="post" action="calc_pi.php">
<input type="text" name="numbers">
<input type="submit" value="submit" name="submit">
</form>';

if (isset($_POST['submit']) && isset($_POST['numbers']))
  {
  	$numbers = $_POST['numbers'];
   if($numbers>100){
   	echo "less than 100 please";
   }
   else{
	$pi = (4 * (4 * atan(1.0/5.0) - atan(1.0/239.0)));
  echo"<br>";
  echo substr($pi,0,$numbers+2);
   }
}




  
