<?php

    $servername="localhost";
    $user="root";
    $password="";

    $conn=mysqli_connect($servername,$user,$password);

    if($conn->connect_errno){
        die("Connection is fail");
    }

    echo"Connection is Succesfully";
?>