<?php
    function tinggi($x,$y){
        if($x>0&&$y>0){
            for($a=0;$a<$y;$a++){
                $x=$x*2+1;
            }
            echo $x;
        }
    }
    tinggi(5,2);
?>