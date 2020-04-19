<?php if(isset($_POST['submit']))
{

    $username=$_POST['userName'];

        $password = $_POST['userPswd'];

    $mysqli=new mysqli('localhost','root','','crud');
    if($mysqli->connect_errno){echo "connection error". mysqli_connect_errno;exit();}
    $sql="SELECT * FROM login_customer where loginname='$username'";

    $result=$mysqli->query($sql);
    $rows=mysqli_num_rows($result);
    
    $_SESSION["user"]=$username;
        if($rows>0){
        $row=$result->fetch_array();
        if($row[2]==$password)
        {
            header("refresh:0;url=http://localhost/mgmt/sun.php");
            header("location:Home.php");
        }
        else
        {
            echo 'Invalid username/password';
            
        }
    }
    else
    {
        echo "Invalid username, click <a href='SignUp.php'>here</a> to Register";
        

    }
    mysqli_free_result($result);
}?></h6>