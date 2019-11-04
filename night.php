<?php 
   
   for ($i=9; $i > 0; $i--) { 
   	for ($j=$i; $j >0 ; $j--) { 
   		echo $i.'*'.$j.'='.$i*$j;
   		echo "   ";
   	}
   	echo "<br>";
   }
?>