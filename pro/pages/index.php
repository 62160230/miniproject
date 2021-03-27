<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to RealCHAT</title>
    </head>
<body>
    <center>
    <div id="LoginDiv">
        <link rel="stylesheet" type="text/css" href="login.css">
        <form id ="form1" method ="post" action ="UserLogin.php">
            <h2>Login Form</h2>
            <table>
                <tr>
                    <td><input type ="Email" name ="UserMailLogin" placeholder ="Enter Your Email" required></td>
                </tr>
                <tr>
                    <td><input type ="password" name ="UserPasswordLogin" placeholder ="Enter Your Password" required></td>
                </tr>
                <tr>
                    <td><input id="btn1" type ="submit" value ="Login"></td>
                </tr>
                <?php
                    if(isset($_GET['error'])){
                ?>
                <tr>
                    <td></td><td><span style="color: red;">Check Your Email or Password</span></td>
                </tr>
                <?php           
                    }
                ?>
            </table>
            <h4><a href="signup.php" style="color: red; font-size: 18px;">Create Account</a></h4>
        </form>
    </div>
</center>
</body>
</html>