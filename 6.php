<?php
    include "6.html";
    function biner($dsm){
        $x=$dsm;
        $z='';
        $result[]='';
        $count=0;
        echo "Angka desimal : ".$dsm."<br/>";
        echo "Angka biner : ";
        while($x>1){
            if($x%2==0){
                $z=0;
                $x=$x/2;
            }
            else{
                $z=1;
                $x=$x/2;
            }
            $result[]=$z;
        }
        for($a=count($result)-1;$a>0;$a--){
            echo $result[$a];
        }
    }
    biner($_POST['dsm']);
?>