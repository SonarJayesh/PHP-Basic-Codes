<!DOCTYPE html>
<html>
<head>
    <title>forget Passworg Page Demo</title>

        <?php
            if(isset($_POST['btn'])){
                $email=$_POST['email'];
                $pass=$_POST['pass'];

                $servername="localhost";
                $user="root";
                $password="";
                $dbname="Online7pm";

                $conn=mysqli_connect($servername,$user,$password,$dbname);
                if($conn->connect_error){
                    die("Connection is Fail!!");
                }
                $sql="update SignUp set password='".$pass."' where email='".$email."'";
                $res=$conn->query($sql);
                if($res==true){
                    header("Location:loginPage.php");
                }
                else{
                    header("Location:forget.php");
                }
            }
        ?>
</head>
<body>
    <center>
        <form action="" method="post">
            <caption>Forget page</caption><br><br>
                <input type="email" name="email" placeholder="Enter The Email"><br><br>
                <input type="password" name="pass" placeholder="Enter New Password" required> <br><br>

                <input type="submit" name="btn" value="Save">
        </form>
    </center>
</body>
</html>