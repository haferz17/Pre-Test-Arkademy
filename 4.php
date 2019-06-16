<?php
    function sorting($array){
        for($a=1;$a<count($array);$a++){
            for($b=0;$b<count($array);$b++){
                if($array[$a]<$array[$b]){
                    $tmp=$array[$a];
                    $array[$a]=$array[$b];
                    $array[$b]=$tmp;
                }
            }
        }
        echo "Data Terkecil : ".$array[0]."<br/>";
        echo "Data Terbesar : ".$array[count($array)-1]."<br/>";
        echo "Ascending Sort : ";
        for($a=0;$a<count($array);$a++){
            echo $array[$a];
            if($a!=count($array)-1) echo ",";
        }
        echo "<br/>Descending Sort : ";
        for($a=1;$a<count($array);$a++){
            for($b=0;$b<count($array);$b++){
                if($array[$a]>$array[$b]){
                    $tmp=$array[$a];
                    $array[$a]=$array[$b];
                    $array[$b]=$tmp;
                }
            }
        }
        for($a=0;$a<count($array);$a++){
            echo $array[$a];
            if($a!=count($array)-1) echo ",";
        }
    }
    $array=[6,22,34,15,2,13,26,57,42,32];
    sorting($array);
?>