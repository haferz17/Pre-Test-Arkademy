<?php
    function segitiga($x){
        if($x>0&&$x<10){
            for($a=1;$a<=50;$a++){
                $c=0;
                for($b=1;$b<=$a;$b++){
                    if($a%$b==0) $c++;         
                }
                if($c==2) $y[]=$a;  
            }
            for($a=0;$a<$x;$a++){
                for($b=0;$b<=$a;$b++){
                    echo $y[$b];
                    if($b!=$x) echo " ";
                }
            echo "<br/>";
            }
        }
    }
    segitiga(5);
?>