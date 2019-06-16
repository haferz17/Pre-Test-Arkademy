<?php
    function palindrome($x,$y){
        $rvs='';
        $count=0;

        for($a=1;$a<=strlen($x);$a++){
            $rvs=$rvs.substr($x,strlen($x)-$a,1);
        }
        $str=$x.$rvs;
        $d=strlen($str)-strlen($y);
        if(strlen($x)>strlen($y)){
            for($a=0;$a<$d;$a++){
                $e=substr($str,$a,strlen($y));
                if($e==$y){
                    $count++;
                }
            }
            echo "Ditemukan ".$count." kali";
        }
    }
    palindrome("banananana","nana");
?>