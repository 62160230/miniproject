<?php
    session_start();
    include "classes.php";

    if(isset($_POST['UserMailLogin']) && isset($_POST['UserPasswordLogin'])){
        $user = new user();
        $user->setUserMail($_POST['UserMailLogin']);
        $user->setUserPassword(sha1($_POST['UserPasswordLogin']));
        if($user->Userlogin()==true){

            $_SESSION['UserID']=$user->getUserID();
            $_SESSION['UserName']=$user->getUserName();
            $_SESSION['UserMail']=$user->getUserMail();

        }
    }

?>

