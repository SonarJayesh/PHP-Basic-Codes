<?php

    $r1=$_POST['roll'];
    $n1=$_POST['name'];
    $c1=$_POST['city'];

    $servername="localhost";
    $user="root";
    $password="";
    $dbname="mydatabase";

    $conn=mysqli_connect($servername,$user,$password,$dbname);

    if($conn->connect_error){
        die("Connection is Fail");
    }
    echo"Connection is Succesfully";
    $sql="insert into studentinfo values('".$r1."','".$n1."','".$c1."')";
    //$sql="update studentinfo set name='Darshan' where id=103";
   // $sql="delete from studentinfo where id=103";
    $res=$conn->query($sql);
    if($res==TRUE){
        echo"<br>Record is inserted";
    }
    else{
        echo"<br>Record is already exist";
    }

?>