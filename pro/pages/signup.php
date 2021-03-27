<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signup.css">   
    <title>Welcome to RealCHAT</title>
    </head>
    
    <body>
        <center>
        <div id="SignUp Div">
            <form id ="form2" method ="post" action ="InsertUser.php">
                <h2>SignUP Form</h2>
                <table>
                    <tr>
                        <td><input type ="text" name ="UserName" placeholder="Enter Your Name" required></td>
                    </tr>
                    <tr>
                        <td><input type ="email" name ="UserMail" placeholder="Enter Your Email" required></td>
                    </tr>
                    <tr>
                        <td><input type ="password" name ="UserPassword" placeholder="Enter Your Password" required></td>
                    </tr>
                    <tr>
                        <td><input id="btn2" type ="submit" value ="SignUp"></td>
                    </tr>

                    <?php
                        if(isset($_GET['success'])){
                    ?>
                    <tr>
                        <td></td><td><span style ="color: pink;">UserInserted</span></td>
                    </tr>
                    <?php
                        }
                    
                    ?>


                </table>
                 <h4><a href="index.php" style="color: red; font-size: 18px;">Already Have an Account</a></h4>
            </form>        
        </div>
</center>
</body>
</html>