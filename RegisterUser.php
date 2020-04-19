<?php
if(isset($_POST['submit'])){
    $loginUserName=$_POST['userId'];
    $loginUserPassword=$_POST['password'];
    $loginUserConfirmPassword=$_POST['confirmPassword'];

    $loginUserFName=$_POST['firstName'];
    $loginUserMName=$_POST['middleName'];
    $loginUserLName=$_POST['lastName'];
    $loginUserEmailId=$_POST['mailId'];
    $loginUserMobile=$_POST['mobile'];
        $mysqli=new mysqli("localhost","root","","crud");
        if($mysqli->connect_errno)
            echo "connection error".$mysqli->connect_errno;
        echo "connected";
        $sql="INSERT INTO login_customer
         (loginname,loginpswd,loginconfirmpswd,firstname,middlename,lastname,emailid,mobile) 
        VALUES ('$loginUserName','$loginUserPassword','$loginUserConfirmPassword','$loginUserFName',
        '$loginUserMName','$loginUserLName','$loginUserEmailId','$loginUserMobile')";
        echo $sql;
        $result=$mysqli->query($sql);
        session_start();
        $_SESSION["user"]=$loginUserName;
        header("refresh:1; url: menu1.php");
        if($result)
        {
            header('location:Home.php');
        }
        else
            echo "Try again Later";
    }
    ?>