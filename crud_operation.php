<!DOCTYPE html>
<html>
<head>
    <title>Crud operation Demo</title>
    <?php
        if(isset($_POST['btn'])){

            $r1=$_POST['roll'];
            $n1=$_POST['name'];
            $c1=$_POST['city'];

            $servername="localhost";
            $user="root";
            $password="";
            $dbname="Online7pm";

            $conn=mysqli_connect($servername,$user,$password,$dbname);
            if($conn->connect_error){
                die("Connection is fail!!");
            }

            $sql="insert into studentinfo values('".$r1."','".$n1."','".$c1."')";
            $res=$conn->query($sql);
        }
    ?>

</head>
    <center>
        <form action="" method="post">
            <caption>Student Registration</caption> <br><br>
            <input type="text" name="roll" placeholder="Enter the Roll" required>
            <br><br>
            <input type="text" name="name" placeholder="Enter the Name" required>
            <br><br>
            <input type="text" name="city" placeholder="Enter the City" required>
            <br><br>
            <input type="submit" name="btn" value="submit">
        </form>

        <table border="1" align="center" width="500">
            <caption>Student Details</caption>
            <tr>
                <th width="100">Roll</th>
                <th width="100">Name</th>
                <th width="100">City</th>
                <th width="100">Edit</th>
                <th width="100">Remove</th>
            </tr>
            
            <?php
        if(isset($_POST['btn'])){

            $servername="localhost";
            $user="root";
            $password="";
            $dbname="Online7pm";

            $conn=mysqli_connect($servername,$user,$password,$dbname);
            if($conn->connect_error){
                die("Connection is fail");
            }
            $sql="select * from studentinfo";
            $res=$conn->query($sql);

            while($row=$res->fetch_assoc())
            {
                echo"<tr align=center>";
                echo"<td width=100>".$row['roll'],"</td>";
                echo"<td width=100>".$row['name'],"</td>";
                echo"<td width=100>".$row['city'],"</td>";
                echo"<td width=100><a href='update.php?id=".$row['roll']."&name=".$row['name']."&city=".$row['city']."'>Edit</a></td>";
                echo"<td width=100><a href='remove.php?id=".$row['roll']."'>Remove</a></td>";
                echo"</tr>";
    
            }
        }
    ?>
        </table>
    </center>
</html>