<!-- 
    Document   : Home
    Created on : Dec 17, 2016, 8:17:43 PM
    Author     : welcome


<%@page contentType="text/html" pageEncoding="UTF-8"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <div style="background-color: dodgerblue"><h1 style="background-color: azure;font-family: cursive">PAYMENT BILLING SYSTEM</h1></div>
        <img src="/web-inf/images/banner.jpg" alt="building"/>
        <div><table style="background-color: dodgerblue"><th class="/web-inf/Home.css">HOME</th><th class="/web-inf/Home.css">NEW REGISTRATION</th><th class="/web-inf/Home.css">MODIFY DETAIL</th><th class="/web-inf/Home.css">ADMINISTRATOR</th><th class="/web-inf/Home.css">CONTACT US</th></table></div>
        -->   
        <?php 
            ini_set('display_errors',1);
            ini_set('display_startup_errors',1);
            error_reporting(E_ALL);
            
            session_set_cookie_params(0);
            if(isset($_SESSION)){
                session_destroy();
}
            else    
                session_start();
                 ?>
        <!DOCTYPE html>
<html>
    <head>
        <title>SignIn</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript">
               
        </script>
    </head>
    <body>
        <div style="background-color: dodgerblue"><h1 style="background-color: azure;font-family: cursive">Login Here...</div>
        
        
    <br/><br/>
        <h2 style="color: red;"><?php 
            include("verify.php");
        ?></h2>
        <div><table style="background-color: dodgerblue">
                <form action="SignIn.php" method="post">
                    <table style="border: 1pix;">
                        <tr>
                            <th>
                                User Name :
                            </th>
                            <td>
                                <input type="text" id="userName" name="userName">
                            </td>
                        </tr>
                        <tr>
                            <th>Password :</th>
                            <td><input type="password" id="userPswd" name="userPswd"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" title="Submit" name="submit" value="Submit" onclick="reload1()"></input>
                            </td>
                            <td>
                                <input type="reset" title="Resets"></input>
                            </td>
                        </tr>
                    </table>
                </form>
                
            
        
        
    </body>
</html>
