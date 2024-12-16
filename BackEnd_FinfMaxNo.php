<?php

    $n1=$_POST['no1'];
    $n2=$_POST['no2'];

    if($n1<$n2){
        echo"$n2 is Maximum";
    }
    else
    {
        echo"$n1 is Maximum";
    }
?>