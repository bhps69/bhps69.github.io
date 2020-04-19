<?php echo "thanks for visiting"; 
session_start();
?>
<html>
    <head>
    </head>
    <body>
        <input type="submit" onclick="<?php unset($_SESSION["user"]); header('location: SignIn.php');?>">
    </body>
</html>