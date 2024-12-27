<?php
    $servername="localhost";
    $user="root";
    $password="";
    $dbname="mydatabase";

    $conn=mysqli_connect($servername,$user,$password);

    if($conn->connect_error){
        die("Connection is Fail");
    }
    echo"Connection is Succesfully";
    $sql="create table studentinfo(id int(5),name varchar(20),class varchar(10))";
    
    $res=$conn->query($sql);
    if($res==TRUE){
        echo"<br>Table is Created";
    }
    else{
        echo"<br>Table is Already Exist";
    }

?>