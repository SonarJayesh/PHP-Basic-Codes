<?php

    $servername="localhost";
    $user="root";
    $password="";

    $conn=mysqli_connect($servername,$user,$password);

    if($conn->connect_error){
        die("Connection is Fail");
    }
    echo"Connection is Succesfully";

    $sql="create database mydatabase";
    $res=$conn->query($sql);
    if($res==True){
        echo"<br> Database is Created";
    }
    else{
        echo"<br> Database already exist";
    }

?>