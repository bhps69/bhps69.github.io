<!-- 
    Document   : Home
    Created on : Dec 17, 2016, 8:17:43 PM
    Author     : welcome
-->


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SignUp</title>
    </head>
    <body>
        <div style="background-color: dodgerblue"><h1 style="background-color: azure;font-family: cursive">Register</h1></div>
        <?php include("RegisterUser.php");
        ?>        
                
                <form action="SignUp.php" method="post">
                    <table style="border: 1pix">
                        <tr>
                            <th>
                              First Name
                            </th>
                            <td>
                            <input type="text" id="firstName" name="firstName">
                            </td>
                        </tr>
                        <tr>
                            <th>Middle Name</th>
                            <td><input type="text" id="middleName" name="middleName"></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><input type="text" id="lastName" name="lastName" onblur="document.getElementById('fullName').value=document.getElementById('firstName').value+document.getElementById('middleName').value+document.getElementById('lastName').value"></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><input type="text" id="fullName" name="fullName" value=""></td>
                        </tr>
                        <tr>
                            <th>Mail id</th>
                            <td><input type="text" id="mailId" name="mailId"></td>
                        </tr>
                        <tr>
                            <th>Mobile #</th>
                            <td><input type="text" id="mobile" name="mobile"></td>
                        </tr>
                        <tr>
                            <th>UserId</th>
                            <td><input type="text" id="userId" name="userId"></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password" id="password" name="password"></td>
                        </tr>
                        <tr>
                            <th>Confirm Password</th>
                            <td><input type="password" id="confirmPassword" name="confirmPassword"></td>
                        </tr>
                      
                        <tr align='center'>
                            <td>
                                <input type="submit" name="submit" value="Submit"></input>
                            </td>
                            <td>
                                <input type="reset" name="Reset" value="Reset"></input>
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        
        
    </body>
</html>
