<?php

echo "<center><body>";
$num=$_GET["num"];
$car=$_GET["car"];


            for ($l = 0; $l <= $num-2; $l++) {
                
                echo $car;
                
            }

             
            for ($j = 0; $j <= $num-2; $j++)
            {
                //echo"&nbsp";
                echo $car."<a style='color:white'>";
            for ($k = 0; $k <= $num-2; $k++)
            {
                echo $car;
            }
            
                echo "</a>".$car."<br>";
            }
            for ($l = 0; $l <= $num-1; $l++) {
                    
                    echo $car;
                    
            }
                echo "</center></body>";   
            


        
?>