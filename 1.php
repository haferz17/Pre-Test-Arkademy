<?php
    $uang=50000;
    $mie=2500;
    $count=0;

    for($a=0;$a<$uang/($mie*4);$a++){
        $count++;
    }
    echo $uang/$mie+$count;
?>